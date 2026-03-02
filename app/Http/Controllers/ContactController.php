<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    // Method untuk menampilkan halaman
    public function index()
    {
        return view('contact');
    }

    // Method untuk mengirim pesan API Wablas
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $domain     = 'https://kudus.wablas.com';
        $adminPhone = '628138808690'; // Sudah dikoreksi ditambah angka 8
        $tokenFull  = 'VRVARb0BQ34YSJt0wtE1D9AGgRGd1DQ4Dn0MzjVi6qXRMvjW8woOLqNiNOftJpxO.DBGAVT5K';

        // Format nomor HP User
        $userPhone = preg_replace('/[^0-9]/', '', $request->phone);
        if (substr($userPhone, 0, 1) === '0') {
            $userPhone = '62' . substr($userPhone, 1);
        }

        // Susun pesan ke admin Lokavira
        $messageToAdmin  = "Pesan Baru Lokavira \n\n";
        $messageToAdmin .= "Nama   : {$request->name}\n";
        $messageToAdmin .= "No HP  : {$userPhone}\n";
        $messageToAdmin .= "Pesan:\n{$request->message}";

        // Pesan balasan otomatis ke user
        $messageToUser  = "Halo {$request->name},\n\n";
        $messageToUser .= "Terima kasih telah menghubungi Lokavira.\n";
        $messageToUser .= "Pesan Anda sudah kami terima dan tim kami akan segera membalas pesan ini.";

        try {
            $httpOptions = [
                'verify'          => false,
                'timeout'         => 120,
                'connect_timeout' => 30,
                'force_ip_resolve' => 'v4',
            ];

            // 1. Kirim notif ke admin
            Http::withHeaders(['Authorization' => $tokenFull])
                ->withOptions($httpOptions)->asForm()
                ->post($domain . '/api/send-message', [
                    'phone'    => $adminPhone,
                    'message'  => $messageToAdmin,
                ]);

            // 2. Kirim kartu kontak ke admin
            Http::withHeaders(['Authorization' => $tokenFull])
                ->withOptions($httpOptions)->asForm()
                ->post($domain . '/api/send-contact', [
                    'phone'         => $adminPhone,
                    'contact_phone' => $userPhone,
                    'name'          => $request->name
                ]);

            // 3. Kirim balasan ke user
            $response = Http::withHeaders(['Authorization' => $tokenFull])
                ->withOptions($httpOptions)->asForm()
                ->post($domain . '/api/send-message', [
                    'phone'    => $userPhone,
                    'message'  => $messageToUser,
                ]);

            if ($response->successful()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pesan terkirim! Tim Lokavira akan menghubungi Anda.'
                ]);
            } else {
                $errMsg = $response->json()['message'] ?? 'Gagal mengirim pesan';
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal: ' . $errMsg
                ], 500);
            }
        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Koneksi ke WhatsApp Timeout. Pastikan internet lancar.'
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error Sistem: ' . $e->getMessage()
            ], 500);
        }
    }
}