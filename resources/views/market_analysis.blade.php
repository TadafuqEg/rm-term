@extends('layouts.app')
@section('title', 'TERM Reputation Management - Market Analysis')
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

    .slide {
        margin-bottom: 2.5rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid var(--border);
    }

    .slide:last-child {
        border-bottom: none;
    }

    .slide-title {
        color: var(--accent);
        margin-bottom: 1rem;
    }

    .slide-content {
        margin-bottom: 1.5rem;
    }

    .slide-content p {
        white-space: pre-line;
    }

    .slide-image {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
        <h1>Market Analysis</h1>
    </div>
</section>

<main class="main-content">
    <div class="container">
        <section class="section">
            <div class="section-header">
                <h2>Market Analysis</h2>
            </div>

            <div class="slide">
                <h3 class="slide-title">Primary Target Sectors</h3>
                <div class="slide-content">
                    <p>Banking & Financial Services
                        Retail & E-commerce
                        Telecommunications
                        Tourism
                        Government</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Banking & Financial Services</h3>
                <div class="slide-content">
                    <p>Risk signals monitoring
                        Public trust measurement
                        Crisis alerts and management
                        Competitive intelligence
                        Customer feedback analysis</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Retail & E-commerce</h3>
                <div class="slide-content">
                    <p>Brand sentiment tracking
                        Influencer monitoring
                        Customer feedback analysis
                        Competitive pricing analysis
                        Social commerce trend identification</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Telecommunications</h3>
                <div class="slide-content">
                    <p>Complaint heatmaps
                        Service feedback analysis
                        Customer satisfaction tracking
                        Network performance perception
                        Competitive service comparison</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Tourism</h3>
                <div class="slide-content">
                    <p>Destination reputation management
                        Customer sentiment analysis
                        Safety perception monitoring
                        Competitive destination analysis
                        Trend identification for marketing</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Government Sector</h3>
                <div class="slide-content">
                    <p>Political discourse monitoring
                        Misinformation detection
                        Public opinion analysis
                        Public service feedback
                        Crisis management coordination</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Competitor Analysis</h3>
                <div class="slide-content">
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Global Competitors</h3>
                <div class="slide-content">
                    <p>Brandwatch: Comprehensive but expensive
                        Talkwalker: Strong analytics, limited Arabic
                        Sprinklr: Enterprise-grade, complex
                        Meltwater: Media monitoring focus
                        Hootsuite Insights: Limited Arabic support</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Regional Competitors</h3>
                <div class="slide-content">
                    <p>Crowd Analyzer: Arabic-focused platform
                        Lucidya: Customer experience focus
                        Mentionlytics: Affordable, basic Arabic
                        Repustate: Multilingual sentiment analysis
                        Konnect Insights: Growing MENA presence</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Local Egyptian Competitors</h3>
                <div class="slide-content">
                    <p>Click Pixel: Digital marketing focus
                        Bold Brand: Social media management
                        Intcore: Data analysis, custom solutions
                        Engaz Media: Government sector experience
                        Advertima Media: Integrated services</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Competitive Gaps</h3>
                <div class="slide-content">
                    <p>Limited Arabic dialect processing
                        Few government-focused solutions
                        High cost barriers for Egyptian SMEs
                        Poor integration with local systems
                        Shortage of trained analysts</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Market Share Analysis</h3>
                <div class="slide-content">
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Current Market Distribution</h3>
                <div class="slide-content">
                    <p>Global players: 40-45% of market
                        Regional players: 25-30% of market
                        Local players: 25-35% of market
                        Enterprise segment: 45% of market value
                        SME segment: 15% of market value</p>
                    <p>Market Share by Player Type</p>
                    <p>Global: 45%</p>
                    <p>Regional: 30%</p>
                    <p>Local: 25%</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">TERM Potential Market Share</h3>
                <div class="slide-content">
                    <p>Short-term (2025-2027)
                        1-2% market penetration
                        5-7 enterprise clients
                        10-15 mid-market clients
                        Revenue: $500K-$750K</p>
                    <p>Long-term (2031-2035)
                        6-8% market share
                        20-25 enterprise clients
                        50-60 mid-market clients
                        Revenue: $10M-$15M</p>
                    <p>TERM Market Share Growth (%)</p>
                    <p>2</p>
                    <p>2027</p>
                    <p>5</p>
                    <p>2030</p>
                    <p>8</p>
                    <p>2035</p>
                </div>
            </div>

            <div class="slide">
                <h3 class="slide-title">Growth Strategies</h3>
                <div class="slide-content">
                </div>
            </div>

            <div class="navigation-controls">
                <a href="{{route('home')}}" class="btn">Back to Home</a>
            </div>
        </section>
    </div>
</main>
@endsection
@push('scripts')
@endpush
