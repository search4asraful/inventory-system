<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'category_id' => '2',
            'brand_id' => '1',
            'image' => 'apple_11_pro.png',
            'name' => 'Apple iPhone 11 Pro',
            'slug' => 'Apple-iPhone-11-Pro',
            'buy_price' => '119,999 64 GB',
            'price' => '139,999 256 GB',
            'discount_price' => '105,000 256 GB',
            'qty' => '400',
            'sku' => 'SK-IP011',
            'short_description' => '<p>The iPhone 11 Pro is a smartphone that combines a sleek and durable design, a powerful and intelligent processor, a stunning and immersive display, and a versatile and impressive camera system. This phone is ideal for users who want a device that can handle any task, whether it is photography, gaming, productivity, or entertainment.&nbsp;</p>

            <p>It also offers a long-lasting battery, a water-resistant body, and a wireless charging capability. The iPhone 11 Pro is available in four colors: space gray, silver, gold, and midnight green. The iPhone 11 Pro has a starting price of $999 for the 64GB model, $1149 for the 256GB model, and $1349 for the 512GB model.</p>',
            'long_description' => '<h3>Apple iPhone 11 Pro Full Specifications</h3>

            <table>
                <tbody>
                    <tr>
                        <td><strong>First Release</strong></td>
                        <td>20 September, 2019</td>
                    </tr>
                    <tr>
                        <td><strong>Colors</strong></td>
                        <td>Matte Space Gray, Matte Silver, Matte Gold, Matte Midnight Green</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Connectivity</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>Network</td>
                        <td>2G, 3G, 4G</td>
                    </tr>
                    <tr>
                        <td>SIM</td>
                        <td>Nano-SIM and eSIM or Dual SIM (Nano-SIM, dual stand-by)</td>
                    </tr>
                    <tr>
                        <td>WLAN</td>
                        <td>✅ Wi-Fi dual-band, hotspot</td>
                    </tr>
                    <tr>
                        <td>Bluetooth</td>
                        <td>✅ v5.0, A2DP, LE</td>
                    </tr>
                    <tr>
                        <td>GPS</td>
                        <td>✅&nbsp;A-GPS, GLONASS, GALILEO, QZSS</td>
                    </tr>
                    <tr>
                        <td>Radio</td>
                        <td>✖</td>
                    </tr>
                    <tr>
                        <td>USB</td>
                        <td>Lightning, USB 2.0</td>
                    </tr>
                    <tr>
                        <td>OTG</td>
                        <td>✅</td>
                    </tr>
                    <tr>
                        <td>USB Type-C</td>
                        <td>✖&nbsp;(Proprietary reversible connector)</td>
                    </tr>
                    <tr>
                        <td>NFC</td>
                        <td>✅</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Body</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>Style</td>
                        <td>Notch</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Glass front Corning-made glass, glass back, stainless steel frame</td>
                    </tr>
                    <tr>
                        <td>Water Resistance</td>
                        <td>✅ IP68 dust/water resistant (up to 4m for 30 min)</td>
                    </tr>
                    <tr>
                        <td>Dimensions</td>
                        <td>144 x 71.4 x 8.1 millimeters</td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td>188 grams</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Display</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>Size</td>
                        <td>5.8 inches</td>
                    </tr>
                    <tr>
                        <td>Resolution</td>
                        <td>Quad HD+ 1125 x 2436 pixels (458 ppi)</td>
                    </tr>
                    <tr>
                        <td>Technology</td>
                        <td>Super Retina XDR OLED Touchscreen</td>
                    </tr>
                    <tr>
                        <td>Protection</td>
                        <td>✅ Scratch-resistant glass</td>
                    </tr>
                    <tr>
                        <td>Features</td>
                        <td>Dolby Vision, HDR10, 800 nits (HBM), 1200 nits (peak)</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Back Camera</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>Resolution</td>
                        <td>12 MP, f/1.8, 26mm (wide), 1/2.55&Prime;, 1.4&micro;m, dual pixel PDAF, OIS<br />
                        12 MP, f/2.0, 52mm (telephoto), 1/3.4&Prime;, 1.0&micro;m, PDAF, OIS, 2x optical zoom<br />
                        12 MP, f/2.4, 120˚, 13mm (ultrawide), 1/3.6&Prime;</td>
                    </tr>
                    <tr>
                        <td>Features</td>
                        <td>Dual-LED dual-tone flash, HDR (photo/panorama) &amp; more</td>
                    </tr>
                    <tr>
                        <td>Video Recording</td>
                        <td>4K@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec.</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Front Camera</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>Resolution</td>
                        <td>12 MP, f/2.2, 23mm (wide), 1/3.6&Prime;<br />
                        SL 3D, (depth/biometrics sensor)</td>
                    </tr>
                    <tr>
                        <td>Features</td>
                        <td>(HDR &amp; more)</td>
                    </tr>
                    <tr>
                        <td>Video Recording</td>
                        <td>4K@24/30/60fps, 1080p@30/60/120fps, gyro-EIS</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Battery</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>Type and Capacity</td>
                        <td>Lithium-ion 3046 mAh (non-removable)</td>
                    </tr>
                    <tr>
                        <td>Fast Charging</td>
                        <td>✅ Wired, PD2.0, 50% in 30 min (advertised)</td>
                    </tr>
                    <tr>
                        <td>Wireless Charging</td>
                        <td>✅ Wireless (Qi)</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Performance</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>Operating System</td>
                        <td>iOS 13</td>
                    </tr>
                    <tr>
                        <td>Chipset</td>
                        <td>Apple A13 Bionic (7 nm+)</td>
                    </tr>
                    <tr>
                        <td>RAM</td>
                        <td>6 GB</td>
                    </tr>
                    <tr>
                        <td>Processor</td>
                        <td>Hexa-core (2&times;2.65 GHz Lightning + 4&times;1.8 GHz Thunder)</td>
                    </tr>
                    <tr>
                        <td>GPU</td>
                        <td>Apple GPU (4-core graphics)</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Storage</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>ROM</td>
                        <td>64 / 256 / 512 GB (NVMe)</td>
                    </tr>
                    <tr>
                        <td>External Slot</td>
                        <td>✖</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Sound</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>3.5mm Jack</td>
                        <td>✖</td>
                    </tr>
                    <tr>
                        <td>Features</td>
                        <td>Loudspeaker (stereo speakers)</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Security</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>Fingerprint</td>
                        <td>✖</td>
                    </tr>
                    <tr>
                        <td>Face Unlock</td>
                        <td>✅&nbsp;Apple Face ID</td>
                    </tr>
                    <tr>
                        <th>&nbsp;Others</th>
                    </tr>
                    <tr>
                        <td>Notification Light</td>
                        <td>✅&nbsp;LED Flash for Alerts</td>
                    </tr>
                    <tr>
                        <td>Sensors</td>
                        <td>Face ID, accelerometer, gyro, proximity, compass, barometer</td>
                    </tr>
                    <tr>
                        <td>Other Features</td>
                        <td>&ndash; Apple Pay (Visa, MasterCard, AMEX certified)<br />
                        &ndash; Siri</td>
                    </tr>
                    <tr>
                        <td>Manufactured by</td>
                        <td>Apple</td>
                    </tr>
                </tbody>
            </table>',
        ]);

        Product::create([
            'category_id' => '1',
            'brand_id' => '2',
            'image' => 'realme_book.png',
            'name' => 'Realme Book Core i3 11th Gen 256GB SSD 14" 2k UHD Laptop',
            'slug' => 'realme-book',
            'buy_price' => '73,000',
            'price' => '80,000',
            'discount_price' => '76,500',
            'qty' => '700',
            'sku' => 'SK-RBG011',
            'short_description' => '<ul>
            <li>Model: Realme Book</li>
            <li>Processor: Intel Core i3-1115G4 (6MB Cache, 3.0 GHz up to 4.10 GHz)</li>
            <li>RAM: 8GB 3733MHz, Storage: 256GB SSD</li>
            <li>Display: 14&quot; 2K Full Vision</li>
            <li>Features: Backlit Keyboard, Fingerprint, Type-C</li>
            </ul>',
            'long_description' => '<h2>Specification</h2>

            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <td colspan="3">Processor</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Processor Brand</td>
                        <td>Intel</td>
                    </tr>
                    <tr>
                        <td>Processor Model</td>
                        <td>Core i3-1115G4</td>
                    </tr>
                    <tr>
                        <td>Generation</td>
                        <td>11th Gen</td>
                    </tr>
                    <tr>
                        <td>Processor Frequency</td>
                        <td>3.0 GHz up to 4.10 GHz</td>
                    </tr>
                    <tr>
                        <td>Processor Core</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Processor Thread</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>CPU Cache</td>
                        <td>6MB</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Display</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Display Size</td>
                        <td>14 Inch</td>
                    </tr>
                    <tr>
                        <td>Display Type</td>
                        <td>2K (2160 &times; 1440)</td>
                    </tr>
                    <tr>
                        <td>Display Resolution</td>
                        <td>IPS</td>
                    </tr>
                    <tr>
                        <td>Display Features</td>
                        <td>90% Screen-to-body Ratio, 3:2 Aspect Ratio, 400 nits Peak Brightness, 330 nits Typical Brightness, 100% sRGB, 1500: 1 Contrast Ratio, Full Vision Display with Corning Gorilla Glass</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Memory</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>RAM</td>
                        <td>8GB</td>
                    </tr>
                    <tr>
                        <td>RAM Type</td>
                        <td>LPDDR4x</td>
                    </tr>
                    <tr>
                        <td>Removable</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>Bus Speed</td>
                        <td>3733MHz</td>
                    </tr>
                    <tr>
                        <td>Total RAM Slot</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Max RAM Capacity</td>
                        <td>8GB</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Storage</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Storage Type</td>
                        <td>PCIe SSD</td>
                    </tr>
                    <tr>
                        <td>Storage Capacity</td>
                        <td>256GB</td>
                    </tr>
                    <tr>
                        <td>Extra M.2 Slot</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Storage Upgrade</td>
                        <td>Installed SSD can be upgradeable</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Graphics</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Graphics Model</td>
                        <td>Intel UHD Graphics</td>
                    </tr>
                    <tr>
                        <td>Graphics Memory</td>
                        <td>Shared</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Keyboard &amp; TouchPad</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Keyboard Type</td>
                        <td>3-level Backlit Keyboard</td>
                    </tr>
                    <tr>
                        <td>Keyboard Features</td>
                        <td>1.3mm Key Travel, X-shape Bracket, Smile Arc</td>
                    </tr>
                    <tr>
                        <td>TouchPad</td>
                        <td>Large Multi-touch Trackpad (123.8 &times; 78.2mm, Supports Microsoft PTP Clickpad Technology)</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Camera &amp; Audio</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>WebCam</td>
                        <td>720P HD</td>
                    </tr>
                    <tr>
                        <td>Speaker</td>
                        <td>HARMAN Speaker x 2</td>
                    </tr>
                    <tr>
                        <td>Microphone</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Audio Features</td>
                        <td>Vocplus AI Noise Cancellation Algorithm<br />
                        Stereo Surround Sound By DTS</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Ports &amp; Slots</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Optical Drive</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Card Reader</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>USB 3 Port</td>
                        <td>USB-A 3.1 Gen</td>
                    </tr>
                    <tr>
                        <td>USB Type-C / Thunderbolt Port</td>
                        <td>USB-C 3.2 &times; 2 Gen 2</td>
                    </tr>
                    <tr>
                        <td>Headphone &amp; Microphone Port</td>
                        <td>3.5mm Headphone and Microphone Jack</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Network &amp; Connectivity</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>WiFi</td>
                        <td>IEEE802.11 a/b/g/n/Wi-Fi 5<br />
                        2.4 GHz and 5 GHz<br />
                        2 x 2 MIMO</td>
                    </tr>
                    <tr>
                        <td>Bluetooth</td>
                        <td>Bluetooth 5.1</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Security</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fingerprint Sensor</td>
                        <td>Fingerprint Power Button</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Software</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Operating System</td>
                        <td>Windows 10 Home</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Power</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Battery Capacity</td>
                        <td>54Wh</td>
                    </tr>
                    <tr>
                        <td>Adapter Type</td>
                        <td>65W USB-C Power Adapter (Compatible 30W Dart Charge)</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Physical Specification</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Color</td>
                        <td>Real Grey</td>
                    </tr>
                    <tr>
                        <td>Dimensions</td>
                        <td>Length: 307.21 mm<br />
                        Width: 228.96 mm<br />
                        Height: 14.9 mm (thickest point: 15.5mm)</td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td>Approx. 1.38 kg</td>
                    </tr>
                    <tr>
                        <td>Body Material</td>
                        <td>High-quality aluminum body</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td colspan="3">Warranty</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Warranty Details</td>
                        <td>1 Year</td>
                    </tr>
                </tbody>
            </table>
            
            <h2>Description</h2>
            
            <h2>Realme Book Core i3 11th Gen 256GB SSD&nbsp;14&quot; 2k UHD Laptop</h2>
            
            <p>The Realme Book features an 11th Gen Intel Core Processor. It comes with Intel Core i3-1115G4 Processor (6MB Cache, 3.0 GHz up to 4.10 GHz). It offers a huge performance boost with remarkable speed. It has an advanced cooling system featuring dual 8 mm-diameter heat pipes, dual ultra-thin, high-speed, and high-airflow fans, and an efficient wing-shaped design that maximizes the entire machine&#39;s cooling capacity, enabling breakneck performance. It comes equipped with an 8GB Dual channel 3733MHz LPDDR4x RAM and 256GB&nbsp;PCIe SSD which allows for seamless multitasking. SSD provides enough space to manage and transfer files with greater speed and efficiency. It has 3100MB/s &amp; 1800MB/s Read and write speeds. It is integrated with Intel UHD graphics and it delivers a high-performance boost.</p>
            
            <h3>2K Full Vision Display with 14.9 Super Slim Design</h3>
            
            <p>The Realme Book comes with a 2K Ultra-HD screen that delivers stellar image quality with sharp detail. Razor-thin bezels allow a 90% screen-to-body ratio for an immersive viewing experience. A 3:2 aspect ratio allows the more vertical content display to maximize your productivity. The display brightness of up to 400 nits maintains high image quality outdoors. 100% sRGB wide color gamut enables full-spectrum color for true-to-life visuals. It has a sleek aluminum build that is achieved through precision-crafted for an effortlessly stylish exterior that matches an exceptionally powerful interior. It is just 1.38 kg light and 14.9 mm thin to maximize portability without compromising on durability.</p>
            
            <h3>Dual HARMAN audio speakers system with Stereo Surround Sound By DTS</h3>
            
            <p>Realme Book features Stereo Surround Sound By DTS and is equipped with a Dual HARMAN audio speakers system that delivers highly immersive audio experiences. Stereo Surround Sound enables you to fully enjoy the dramatic all-around cinema-like sound without distortion.</p>
            
            <h3>Next Level of Connectivity</h3>
            
            <p>This Laptop is equipped with Wi-Fi 5. It has 2.4 GHz and 5 GHz and 2 x 2 MIMO. It also has Bluetooth 5.1. This Realme Book has been designed with USB-C 3.2 &Atilde;&mdash; 2 Gen 2, USB-A 3.1 Gen 1, and 3.5mm Headphone and Microphone Jack. It comes with Cross-Device Integration. PC Connect allows you to seamlessly connect your devices, so you can access files of smartphones instantly and drag and drop them between different screens with ease.</p>
            
            <h3>Backlit Keyboard and Extra-Large touchpad</h3>
            
            <p>Realme Book has a 3-level Backlit Keyboard with a 1.3mm Key Travel, X-shape Bracket, Smile Arc. It also has a 123.8 &Atilde;&mdash; 78.2mm Large Multi-touch Trackpad that supports Microsoft PTP Clickpad Technology. It especially comes with a 2-in-1 Fingerprint Function that is capable of One-touch start-up and unlocking. It also has an In-built 720P HD Camera that features dual microphones that come with Vocplus AI-powered noise-reduction technology.</p>
            
            <h3>Fast Charge Your Device</h3>
            
            <p>The laptop is powered by a 54 Wh battery and it comes with a 65W fast charger that gets you to a 50% charge in just 30 minutes. It also supports up to 30W Dart flash charging for smartphones with a USB-C port, so you can keep your mobile devices powered while you&#39;re on the go.</p>
            
            <p>The Realme Book Core i3 Laptop comes with a 1-year warranty.</p>',
        ]);

        Product::create([
            'category_id' => '3',
            'brand_id' => '1',
            'image' => 'CorsairVengeanceLPX8GB3200MHz.png',
            'name' => 'Corsair Vengeance LPX 8GB 3200MHz DDR4 Desktop RAM',
            'slug' => 'Corsair-vengeance-8GB-3200MHz-DDR4',
            'buy_price' => '2400',
            'price' => '2810',
            'discount_price' => '2590',
            'qty' => '350',
            'sku' => 'SK-LPX8GB',
            'short_description' => '<ul>
                <li>MPN: CMK8GX4M1E3200C16</li>
                <li>Model: Corsair Vengeance LPX 8GB</li>
                <li>Capacity 8GB</li>
                <li>Speed: 3200MHz</li>
                <li>Tested Latency: 16-20-20-38</li>
                <li>Voltage: 1.35V</li>
            </ul>',
            'long_description' => '<h2>Description</h2>

            <p>&nbsp;</p>
            
            <p>Corsair Vengeance LPX 8GB 3200MHz DDR4 Desktop RAM</p>
            
            <p>&nbsp;</p>
            
            <ul>
                <li>Density: 8GB</li>
                <li>Speed: 3200MHz</li>
                <li>Tested Latency: 16-20-20-38</li>
                <li>Voltage: 1.35V</li>
                <li>Format: Unbuffered DIMM</li>
                <li>Pin Out: 288 Pin</li>
                <li>Intel XMP 2.0</li>
                <li>Heatspreader: Anodized Aluminum</li>
                <li>Compatibility-Intel 100 Series platform</li>
            </ul>
            
            <p>Warranty: Product Lifetime&nbsp;</p>',
        ]);

        Product::create([
            'category_id' => '2',
            'brand_id' => '3',
            'image' => 'LavaYuva3.jpg',
            'name' => 'Lava Yuva 3',
            'slug' => 'Lava-Yuva-3',
            'buy_price' => '2400',
            'price' => '2810',
            'discount_price' => '2590',
            'qty' => '350',
            'sku' => 'SK-LV003',
            'short_description' => '<p><strong>What is the price of Lava Yuva 3?</strong></p>

            <p>The BD price of Lava Yuva 3 starts from BDT 12,490.00. Prices are subject to change.</p>',
            'long_description' => '<h2>Lava Yuva 3 Full Specifications</h2>

            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Name</p>
                        </td>
                        <td>Lava Yuva 3</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Brand</p>
                        </td>
                        <td>Lava</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Category</p>
                        </td>
                        <td>Smartphone</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Model</p>
                        </td>
                        <td>Yuva 3</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Price</p>
                        </td>
                        <td>12,490.00 Taka (approx)</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Showroom</p>
                        </td>
                        <td><a href="https://www.gsmarenabd.com/showrooms/"><em>Click Here</em></a></td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Network</p>
            
            <table>
                <tbody>
                    <tr>
                        <td>
                        <p>Network Type</p>
                        </td>
                        <td>GSM / HSPA / LTE</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Network 2G</p>
                        </td>
                        <td>GSM 900 / 1800 - SIM 1 &amp; SIM 2</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Network 3G</p>
                        </td>
                        <td>HSDPA 900 / 2100</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Network 4G</p>
                        </td>
                        <td>LTE</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Speed</p>
                        </td>
                        <td>HSPA, LTE</td>
                    </tr>
                    <tr>
                        <td>
                        <p>GPRS</p>
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>
                        <p>EDGE</p>
                        </td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Launch</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Launch Announcement</p>
                        </td>
                        <td>2024, February</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Launch Date</p>
                        </td>
                        <td>Available. Released 2024, February</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Body</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Body Dimensions</p>
                        </td>
                        <td>164.2 x 76 x 8.5 mm (6.46 x 2.99 x 0.33 in)</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Body Weight</p>
                        </td>
                        <td>192 g (6.77 oz)</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Network Sim</p>
                        </td>
                        <td>Dual SIM (Nano-SIM, dual stand-by)</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Display</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p><a href="https://www.gsmarenabd.com/lava-yuva-3/">Display Type</a></p>
                        </td>
                        <td>IPS LCD, 90Hz</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Display Size</p>
                        </td>
                        <td>6.52 inches, 102.6 cm2</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Display Resolution</p>
                        </td>
                        <td>720 x 1600 pixels, 20:9 ratio</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Display Multitouch</p>
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Display Density</p>
                        </td>
                        <td>269 ppi</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Platform</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Operating System</p>
                        </td>
                        <td>Android</td>
                    </tr>
                    <tr>
                        <td>
                        <p>OS Version</p>
                        </td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>
                        <p>CPU</p>
                        </td>
                        <td>Octa-core (2x1.6 GHz Cortex-A75 &amp; 6x1.6 GHz Cortex-A55)</td>
                    </tr>
                    <tr>
                        <td>
                        <p>GPU</p>
                        </td>
                        <td>Mali-G57 MP1</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Chipset</p>
                        </td>
                        <td>Unisoc T606 (12 nm)</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Memory</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Memory Internal</p>
                        </td>
                        <td>64 GB, 128 GB</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Memory External</p>
                        </td>
                        <td>microSDXC (dedicated slot)</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Ram</p>
                        </td>
                        <td>4 GB</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Camera</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Primary Camera</p>
                        </td>
                        <td>Triple: 13 MP, (wide), AF</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>VGA</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>0.08 MP (auxiliary lens)</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Secondary Camera</p>
                        </td>
                        <td>5 MP</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Camera Features</p>
                        </td>
                        <td>LED flash, HDR, panorama</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Video</p>
                        </td>
                        <td>1080p@30fps</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Sound</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Audio</p>
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Loudspeaker</p>
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>
                        <p>3.5mm Jack</p>
                        </td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Connectivity</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>WiFi</p>
                        </td>
                        <td>Wi-Fi 802.11 b/g/n/ac</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Bluetooth</p>
                        </td>
                        <td>5.0, A2DP, LE</td>
                    </tr>
                    <tr>
                        <td>
                        <p>NFC</p>
                        </td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>
                        <p>OTG</p>
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>
                        <p>USB</p>
                        </td>
                        <td>USB Type-C 2.0</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Fm Radio</p>
                        </td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>
                        <p>GPS</p>
                        </td>
                        <td>Yes with a GPS</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Features</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Sensors</p>
                        </td>
                        <td>Fingerprint (side-mounted), accelerometer, proximity</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Messaging</p>
                        </td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>Battery</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Battery Type</p>
                        </td>
                        <td><a href="https://www.gsmarenabd.com/lava-yuva-3/">Non-removable Li-Po Battery</a></td>
                    </tr>
                    <tr>
                        <td>
                        <p>Battery Capacity</p>
                        </td>
                        <td>5000 mAh</td>
                    </tr>
                    <tr>
                        <td>
                        <p>Battery Charging</p>
                        </td>
                        <td>18W wired</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>
            
            <p>More</p>
            
            <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td>
                        <p>Body Color</p>
                        </td>
                        <td>Eclipse Black, Cosmic Lavender, Galaxy White</td>
                    </tr>
                </tbody>
            </table>
            
            <h2>Lava Yuva 3 Price and Specifications in Bangladesh</h2>',
        ]);
    }
}
