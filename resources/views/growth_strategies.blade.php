@extends('layouts.app')
@section('title', 'TERM Reputation Management - Growth Strategies')
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
    
    h1, h2, h3, h4, h5, h6 {
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
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
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
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
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
        color: rgba(255,255,255,0.7);
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
            <h1>Growth Strategies</h1>
        </div>
    </section>

    <main class="main-content">
        <div class="container">
            <section class="section">
                <div class="section-header">
                    <h2>Growth Strategies</h2>
                </div>

                <div class="slide">
                    <h3 class="slide-title">Implementation Roadmap</h3>
                    <div class="slide-content">
                    </div>
                </div>

                <div class="slide">
                    <h3 class="slide-title">Year 1 (2025-2026)</h3>
                    <div class="slide-content">
                        <p>Core team recruitment
                            Initial technology platform development
                            First 3-5 enterprise clients onboarding
                            Basic Arabic analytics engine launch
                            Government sector demonstration project</p>
                    </div>
                </div>

                <div class="slide">
                    <h3 class="slide-title">Year 2 (2026-2027)</h3>
                    <div class="slide-content">
                        <p>Advanced sentiment analysis capabilities
                            Crisis alert system development
                            Mid-market offering launch
                            PR agency partnership program
                            First government sector contract</p>
                    </div>
                </div>

                <div class="slide">
                    <h3 class="slide-title">Years 3-5 (2028-2030)</h3>
                    <div class="slide-content">
                        <p>Mobile application launch
                            SME offering with freemium model
                            Training academy establishment
                            Major government contracts
                            Office expansion in Cairo</p>
                    </div>
                </div>

                <div class="slide">
                    <h3 class="slide-title">Years 6-10 (2031-2035)</h3>
                    <div class="slide-content">
                        <p>Saudi Arabia market entry (Year 6-7)
                            UAE market entry (Year 7-8)
                            AI-driven predictive reputation management
                            Strategic acquisitions
                            Public sector division establishment</p>
                    </div>
                </div>

                <div class="slide">
                    <h3 class="slide-title">Financial Projections</h3>
                    <div class="slide-content">
                    </div>
                </div>

                <div class="slide">
                    <h3 class="slide-title">Revenue Projections</h3>
                    <div class="slide-content">
                        <p>Year 1-2
                            Year 1: $250K-$350K
                            Year 2: $500K-$750K
                            Enterprise clients: $350K
                            Mid-market clients: $250K</p>
                        <p>Year 5-10
                            Year 5: $3M-$5M
                            Year 10: $10M-$15M
                            Enterprise clients: $5M
                            International clients: $2M</p>
                        <p>Revenue Growth ($M)</p>
                        <p>0.35</p>
                        <p>Year 1</p>
                        <p>0.75</p>
                        <p>Year 2</p>
                        <p>5</p>
                        <p>Year 5</p>
                        <p>15</p>
                        <p>Year 10</p>
                    </div>
                </div>

                <div class="slide">
                    <h3 class="slide-title">Profitability Timeline</h3>
                    <div class="slide-content">
                        <p>Year 1-2: Investment phase
                            Year 3-4: Break-even phase
                            Year 5-10: Profitability phase
                            Year 10 EBITDA: $1.5M-$3.5M
                            ROI for investors: 5-7x by Year 10</p>
                        <p>EBITDA Projection ($M)</p>
                        <p>-0.5</p>
                        <p>Year 2</p>
                        <p>0</p>
                        <p>Year 4</p>
                        <p>1.5</p>
                        <p>Year 7</p>
                        <p>3.5</p>
                        <p>Year 10</p>
                    </div>
                </div>

                <div class="slide">
                    <h3 class="slide-title">Conclusion</h3>
                    <div class="slide-content">
                        <p>Significant market opportunity in Egypt
                            Competitive advantage through Arabic NLP
                            Clear growth path from 1-2% to 6-8% share
                            Strong value proposition for target sectors
                            Attractive returns potential for investors</p>
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
