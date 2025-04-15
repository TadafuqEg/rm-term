@extends('layouts.app')
@section('title', 'TERM Reputation Management - Competitor Analysis')
@section('content')
    <style>
        :root {
            --primary: #1a365d;
            --secondary: #c9a227;
            --accent: #2c7c7d;
            --background: #f5f5f5;
            --text: #333333;
            --light-text: #ffffff;
            --border: #dddddd;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.6;
            color: var(--text);
            background-color: var(--background);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        h2 {
            font-size: 2rem;
            margin-top: 2rem;
        }

        h3 {
            font-size: 1.5rem;
            color: var(--accent);
        }

        p {
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: var(--primary);
            color: var(--light-text);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--light-text);
            text-decoration: none;
        }

        .logo span {
            color: var(--secondary);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 1.5rem;
        }

        nav ul li a {
            color: var(--light-text);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--secondary);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--light-text);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .page-header {
            background-color: var(--primary);
            color: var(--light-text);
            padding: 3rem 0;
            text-align: center;
        }

        .page-header h1 {
            color: var(--light-text);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .page-header p {
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .main-content {
            padding: 3rem 0;
        }

        .section {
            margin-bottom: 3rem;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .section-header {
            border-bottom: 2px solid var(--secondary);
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }

        .competitor-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .competitor-card {
            background-color: var(--background);
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .competitor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .competitor-card h3 {
            color: var(--primary);
            margin-bottom: 1rem;
            border-bottom: 2px solid var(--secondary);
            padding-bottom: 0.5rem;
        }

        .competitor-card ul {
            padding-left: 1.5rem;
            margin-bottom: 1rem;
        }

        .competitor-card li {
            margin-bottom: 0.5rem;
        }

        .competitor-card .strengths {
            color: #28a745;
            font-weight: 600;
            margin-top: 1rem;
        }

        .competitor-card .weaknesses {
            color: #dc3545;
            font-weight: 600;
            margin-top: 1rem;
        }

        .gap-analysis {
            margin-top: 3rem;
            padding: 2rem;
            background-color: var(--accent);
            color: var(--light-text);
            border-radius: 8px;
        }

        .gap-analysis h3 {
            color: var(--light-text);
            border-bottom: 2px solid var(--secondary);
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }

        .gap-analysis ul {
            padding-left: 1.5rem;
        }

        .gap-analysis li {
            margin-bottom: 0.5rem;
        }

        .navigation-controls {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: var(--secondary);
            color: var(--light-text);
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #b08a1e;
        }

        .btn-primary {
            background-color: var(--primary);
        }

        .btn-primary:hover {
            background-color: #142c4c;
        }

        footer {
            background-color: var(--primary);
            color: var(--light-text);
            padding: 2rem 0;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-logo {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .footer-links {
            display: flex;
            list-style: none;
            margin-bottom: 1rem;
        }

        .footer-links li {
            margin: 0 1rem;
        }

        .footer-links li a {
            color: var(--light-text);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links li a:hover {
            color: var(--secondary);
        }

        .copyright {
            width: 100%;
            margin-top: 1rem;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                align-items: flex-start;
            }

            nav {
                width: 100%;
                margin-top: 1rem;
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 0.5rem 0;
                margin-left: 0;
            }

            .mobile-menu-btn {
                display: block;
                position: absolute;
                top: 1rem;
                right: 1rem;
            }

            .nav-menu {
                display: none;
            }

            .nav-menu.active {
                display: block;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .competitor-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                flex-direction: column;
            }

            .footer-links {
                flex-direction: column;
                align-items: center;
            }

            .footer-links li {
                margin: 0.5rem 0;
            }
        }
    </style>
    <section class="page-header">
        <div class="container">
            <h1>Competitor Analysis</h1>
            <p>Comprehensive analysis of key players in the social media listening and reputation management market in Egypt
                and beyond</p>
        </div>
    </section>

    <main class="main-content">
        <div class="container">
            <section class="section">
                <div class="section-header">
                    <h2>Key Players in the Market</h2>
                    <p>The social media listening and reputation management market in Egypt is served by global, regional,
                        and local players, each with distinct strengths and weaknesses.</p>
                </div>

                <h3>Global Players</h3>
                <div class="competitor-grid">
                    <div class="competitor-card">
                        <h3>Brandwatch</h3>
                        <p>A leading global social media monitoring platform with advanced analytics capabilities.</p>
                        <div class="strengths">Strengths:</div>
                        <ul>
                            <li>Comprehensive data coverage</li>
                            <li>Advanced AI-powered analytics</li>
                            <li>Robust visualization tools</li>
                            <li>Enterprise-grade security</li>
                        </ul>
                        <div class="weaknesses">Weaknesses:</div>
                        <ul>
                            <li>Limited Arabic language support</li>
                            <li>High pricing structure</li>
                            <li>Complex interface for new users</li>
                            <li>Limited local market context</li>
                        </ul>
                    </div>

                    <div class="competitor-card">
                        <h3>Talkwalker</h3>
                        <p>Enterprise social listening platform with image recognition and AI-powered insights.</p>
                        <div class="strengths">Strengths:</div>
                        <ul>
                            <li>Visual content analysis</li>
                            <li>Extensive global coverage</li>
                            <li>Crisis management tools</li>
                            <li>Competitive benchmarking</li>
                        </ul>
                        <div class="weaknesses">Weaknesses:</div>
                        <ul>
                            <li>Weak Arabic sentiment analysis</li>
                            <li>Premium pricing model</li>
                            <li>Limited local support in Egypt</li>
                            <li>Not optimized for government use cases</li>
                        </ul>
                    </div>

                    <div class="competitor-card">
                        <h3>Sprinklr</h3>
                        <p>Unified customer experience management platform with social listening capabilities.</p>
                        <div class="strengths">Strengths:</div>
                        <ul>
                            <li>Comprehensive CXM suite</li>
                            <li>Strong enterprise integration</li>
                            <li>Robust reporting features</li>
                            <li>Multi-channel capabilities</li>
                        </ul>
                        <div class="weaknesses">Weaknesses:</div>
                        <ul>
                            <li>Insufficient Arabic language processing</li>
                            <li>High implementation costs</li>
                            <li>Complex deployment process</li>
                            <li>Limited customization for Egyptian market</li>
                        </ul>
                    </div>
                </div>

                <h3>Regional Players</h3>
                <div class="competitor-grid">
                    <div class="competitor-card">
                        <h3>Crowd Analyzer</h3>
                        <p>MENA-focused social media monitoring platform with Arabic language capabilities.</p>
                        <div class="strengths">Strengths:</div>
                        <ul>
                            <li>Strong Arabic language support</li>
                            <li>Regional market understanding</li>
                            <li>Dialect recognition</li>
                            <li>Competitive pricing</li>
                        </ul>
                        <div class="weaknesses">Weaknesses:</div>
                        <ul>
                            <li>Limited advanced analytics</li>
                            <li>Smaller data coverage than global players</li>
                            <li>Less robust feature set</li>
                            <li>Limited government-specific solutions</li>
                        </ul>
                    </div>

                    <div class="competitor-card">
                        <h3>Lucidya</h3>
                        <p>Saudi-based social media analytics platform with Arabic NLP capabilities.</p>
                        <div class="strengths">Strengths:</div>
                        <ul>
                            <li>Arabic-first approach</li>
                            <li>Cultural context awareness</li>
                            <li>User-friendly interface</li>
                            <li>Regional support team</li>
                        </ul>
                        <div class="weaknesses">Weaknesses:</div>
                        <ul>
                            <li>Limited Egypt-specific features</li>
                            <li>Developing AI capabilities</li>
                            <li>Smaller historical data archive</li>
                            <li>Limited integration options</li>
                        </ul>
                    </div>

                    <div class="competitor-card">
                        <h3>Mentionlytics</h3>
                        <p>European platform with growing presence in MENA region.</p>
                        <div class="strengths">Strengths:</div>
                        <ul>
                            <li>Competitive pricing</li>
                            <li>User-friendly dashboard</li>
                            <li>Solid alert system</li>
                            <li>Growing Arabic support</li>
                        </ul>
                        <div class="weaknesses">Weaknesses:</div>
                        <ul>
                            <li>Limited dialect recognition</li>
                            <li>Basic sentiment analysis for Arabic</li>
                            <li>Limited local presence in Egypt</li>
                            <li>Generic feature set not tailored to region</li>
                        </ul>
                    </div>
                </div>

                <h3>Local Players</h3>
                <div class="competitor-grid">
                    <div class="competitor-card">
                        <h3>Click Pixel</h3>
                        <p>Egyptian digital marketing agency offering social listening services.</p>
                        <div class="strengths">Strengths:</div>
                        <ul>
                            <li>Strong local market knowledge</li>
                            <li>Competitive pricing</li>
                            <li>Personalized service</li>
                            <li>Local client relationships</li>
                        </ul>
                        <div class="weaknesses">Weaknesses:</div>
                        <ul>
                            <li>Limited proprietary technology</li>
                            <li>Smaller data processing capacity</li>
                            <li>Basic reporting capabilities</li>
                            <li>Limited scalability</li>
                        </ul>
                    </div>

                    <div class="competitor-card">
                        <h3>Bold Brand</h3>
                        <p>Cairo-based agency with reputation management services.</p>
                        <div class="strengths">Strengths:</div>
                        <ul>
                            <li>Deep Egyptian market insights</li>
                            <li>Strong PR integration</li>
                            <li>Local media relationships</li>
                            <li>Flexible service offerings</li>
                        </ul>
                        <div class="weaknesses">Weaknesses:</div>
                        <ul>
                            <li>Relies on third-party tools</li>
                            <li>Manual monitoring processes</li>
                            <li>Limited real-time capabilities</li>
                            <li>Small team size</li>
                        </ul>
                    </div>

                    <div class="competitor-card">
                        <h3>Intcore</h3>
                        <p>Egyptian software development company with social media monitoring solutions.</p>
                        <div class="strengths">Strengths:</div>
                        <ul>
                            <li>Custom development capabilities</li>
                            <li>Local technical support</li>
                            <li>Integration with local systems</li>
                            <li>Competitive local pricing</li>
                        </ul>
                        <div class="weaknesses">Weaknesses:</div>
                        <ul>
                            <li>Developing AI capabilities</li>
                            <li>Limited data sources</li>
                            <li>Basic analytics features</li>
                            <li>Smaller client base</li>
                        </ul>
                    </div>
                </div>

                <div class="gap-analysis">
                    <h3>Market Gaps and Opportunities</h3>
                    <p>Our analysis has identified several significant gaps in the current market that TERM Reputation
                        Management is uniquely positioned to address:</p>
                    <ul>
                        <li><strong>Arabic Sentiment Analysis:</strong> Current solutions lack sophisticated Arabic language
                            processing, especially for Egyptian dialects and cultural context.</li>
                        <li><strong>Government-Facing Dashboards:</strong> Few competitors offer specialized solutions for
                            government entities focused on public discourse monitoring and crisis management.</li>
                        <li><strong>Custom Alerts:</strong> Existing platforms provide limited customization for alert
                            systems tailored to Egyptian market sensitivities and priorities.</li>
                        <li><strong>Integrated Political and Commercial Monitoring:</strong> No current solution effectively
                            bridges the gap between political discourse analysis and commercial brand reputation management.
                        </li>
                        <li><strong>Local Compliance:</strong> Many platforms lack features to ensure compliance with
                            Egypt's evolving data protection regulations (PDPL).</li>
                    </ul>
                </div>

                <div class="navigation-controls">
                    <a href="{{route('home')}}" class="btn">Back to Home</a>
                    <a href="{{route('market_share')}}" class="btn btn-primary">View Market Share Analysis</a>
                </div>
            </section>
        </div>
    </main>

@endsection
@push('scripts')
@endpush
