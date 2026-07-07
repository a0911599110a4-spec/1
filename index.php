<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canada's Premier Casino Resorts</title>
    <style>
        :root {
            --primary-color: #1a252f;
            --secondary-color: #c0392b;
            --accent-color: #d35400;
            --text-dark: #2c3e50;
            --text-light: #f8f9fa;
            --bg-light: #f4f6f7;
            --card-bg: #ffffff;
            --border-color: #e2e8f0;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: var(--text-dark);
            background-color: var(--bg-light);
            line-height: 1.6;
        }

        header {
            background: linear-gradient(rgba(26, 37, 47, 0.85), rgba(26, 37, 47, 0.95)), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="%231a252f"/><circle cx="50" cy="50" r="40" fill="none" stroke="%232c3e50" stroke-width="2"/></svg>');
            color: var(--text-light);
            padding: 80px 20px;
            text-align: center;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        header p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.9;
        }

        main {
            padding: 60px 0;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            color: var(--primary-color);
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: var(--secondary-color);
            margin: 12px auto 0 auto;
            border-radius: 2px;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
            margin-bottom: 60px;
        }

        @media (min-width: 768px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            padding: 30px;
            border-top: 5px solid var(--secondary-color);
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .card-details h3 {
            font-size: 1rem;
            margin-top: 15px;
            margin-bottom: 5px;
            color: var(--accent-color);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .card-details p {
            font-size: 0.95rem;
            color: #555;
        }

        .table-responsive {
            overflow-x: auto;
            background-color: var(--card-bg);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 60px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid var(--border-color);
        }

        th {
            background-color: var(--primary-color);
            color: var(--text-light);
            font-weight: 600;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .notice-box {
            background-color: #fff9e6;
            border-left: 4px solid #f39c12;
            padding: 20px;
            border-radius: 4px;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #7f8c8d;
        }

        footer {
            background-color: var(--primary-color);
            color: var(--text-light);
            text-align: center;
            padding: 30px 20px;
            font-size: 0.9rem;
            opacity: 0.8;
            border-top: 1px solid #2c3e50;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <h1>Canada's Premier Casino Resorts</h1>
            <p>Across Canada, premier casino resorts seamlessly merge upscale hospitality with dynamic entertainment. These world-class properties showcase expansive gaming floors equipped with modern slot machines and classic table games like blackjack, roulette, and poker. Beyond the gaming areas, they deliver a complete destination experience—combining refined accommodations, diverse dining, wellness facilities, and live performances under one roof.</p>
        </div>
    </header>

    <main class="container">
        <section>
            <h2 class="section-title">Featured Destinations</h2>
            <div class="grid">
                
                <div class="card">
                    <h2>1. Fallsview Casino Resort – Niagara Falls, Ontario</h2>
                    <div class="card-details">
                        <h3>The Gaming Experience</h3>
                        <p>Features one of Canada's most massive gaming spaces, blending traditional classics with the latest slot and electronic game variations in a high-energy environment.</p>
                        
                        <h3>Accommodations & Spa</h3>
                        <p>Offers stylish rooms and expansive suites, many boasting unobstructed views of Niagara Falls. Guests have access to a full-service luxury spa, a modern fitness center, and a heated indoor pool.</p>
                        
                        <h3>Gastronomy</h3>
                        <p>Houses a premium collection of restaurants, ranging from fine-dining steakhouses to relaxed, casual bistros.</p>
                        
                        <h3>The Setting</h3>
                        <p>Situated steps from the edge of the falls, combining natural wonder with premier nightlife.</p>
                    </div>
                </div>

                <div class="card">
                    <h2>2. River Rock Casino Resort – Richmond, British Columbia</h2>
                    <div class="card-details">
                        <h3>The Gaming Experience</h3>
                        <p>Delivers a broad, highly accessible selection of slots, electronic gaming terminals, and dedicated poker rooms.</p>
                        
                        <h3>Accommodations & Spa</h3>
                        <p>Contemporary rooms and luxury suites designed for practical comfort. Includes a resort spa, indoor pool, and direct, convenient transit connections to downtown Vancouver.</p>
                        
                        <h3>Gastronomy</h3>
                        <p>Features a vibrant mix of international flavors and Pacific Northwest regional cuisine.</p>
                        
                        <h3>The Setting</h3>
                        <p>Overlooks the Fraser River, offering a tranquil waterfront backdrop just minutes from the city.</p>
                    </div>
                </div>

                <div class="card">
                    <h2>3. Casino de Montréal – Montréal, Quebec</h2>
                    <div class="card-details">
                        <h3>The Gaming Experience</h3>
                        <p>Stands as one of the largest casinos in North America, offering an immense array of table games and slots to suit every preference.</p>
                        
                        <h3>Accommodations & Spa</h3>
                        <p>While the casino itself is a standalone venue without an attached hotel, it partners directly with premier luxury accommodations throughout downtown Montréal.</p>
                        
                        <h3>Gastronomy</h3>
                        <p>Hosts several high-end restaurants and lounges deeply inspired by Québec's distinct culinary heritage.</p>
                        
                        <h3>The Setting</h3>
                        <p>Located on Île Notre-Dame, its iconic mid-century architecture sits surrounded by unique parkland and waterways.</p>
                    </div>
                </div>

                <div class="card">
                    <h2>4. Casino Rama Resort – Orillia, Ontario</h2>
                    <div class="card-details">
                        <h3>The Gaming Experience</h3>
                        <p>Provides a massive, action-packed gaming floor featuring both timeless table classics and cutting-edge slot titles.</p>
                        
                        <h3>Accommodations & Spa</h3>
                        <p>Features warm, cottage-country inspired rooms and suites paired with an indoor pool, fitness center, and full-service wellness spa.</p>
                        
                        <h3>Gastronomy</h3>
                        <p>Offers multiple distinct dining venues, from sophisticated fine dining to casual, laid-back sports bars.</p>
                        
                        <h3>The Setting</h3>
                        <p>Nestled in Ontario's scenic Lake Country, making it a peaceful retreat where entertainment meets the great outdoors.</p>
                    </div>
                </div>

            </div>
        </section>

        <section>
            <h2 class="section-title">What Defines the Canadian Resort Experience?</h2>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>All-in-One Convenience</strong></td>
                            <td>Lodging, dining, gaming, live entertainment, and wellness amenities are integrated into a single property.</td>
                        </tr>
                        <tr>
                            <td><strong>Business & Leisure</strong></td>
                            <td>Equipped with versatile conference centers and grand ballrooms tailored for corporate events and weddings.</td>
                        </tr>
                        <tr>
                            <td><strong>Premium Elements</strong></td>
                            <td>High-stakes VIP salons and personalized concierge services are available for guests seeking an elevated stay.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <div class="notice-box">
            <strong>Responsible Gaming Notice:</strong> This directory is intended for general informational purposes for individuals aged 21 and older. Resort amenities, features, and schedules are subject to change. Visitors are encouraged to plan ahead and participate in gaming responsibly.
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2026 Canada's Premier Casino Resorts. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>