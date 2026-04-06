<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller{
    public function index()
    {
        $packages = [ ['title' => 'High Quality Prints', 'desc' => 'Studio-quality lighting and professional DSLR cameras.'],
        ['title' => 'Custom Props', 'desc' => 'A huge variety of fun, quirky, and themed props.'],
        ['title' => 'Instant Sharing', 'desc' => 'Share photos instantly via email or QR code.'],
        ];

        return view('index', compact('packages'));
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {   
        $packages = [
            [
                'name' => 'Basic Snap',
                'price' => 'Rp 1.500.000',
                'hours' => '2 hours',
                'features' => ['Unlimited Prints (2x6)', 'Standard Backdrop', 'Fun Props Set', 'Online Gallery']
            ],
            [
                'name' => 'Premium Joy',
                'price' => 'Rp 2.500.000',
                'hours' => '4 hours',
                'features' => ['Unlimited Premium Prints (4x6)', 'Custom Premium Backdrop', 'Themed High-End Props', 'Boomerang & GIF Creation', 'Scrapbook Station']
            ],
            [
                'name' => 'Wedding VIP',
                'price' => 'Rp 4.000.000',
                'hours' => '6 hours',
                'features' => ['Everything in Premium', '360 Video Booth Included', 'Custom Photo Template Design', 'Instant Social Media Sharing Kiosk', 'Idle Time (1 hour free)']
            ]
        ];
        
        return view ('services', compact('packages'));
    }
    
    public function contact()
    {
        return view('contact');
    }


}