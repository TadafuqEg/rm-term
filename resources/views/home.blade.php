@extends('layouts.app')
@section('title', 'TERM Reputation Management - Home')
@section('content')
<section class="hero">
    <div class="container">
        <h1>Market Feasibility Study</h1>
        <p>Social Media Listening & Social Engineering in Egypt</p>
        <a href="{{route('executive_summary')}}" class="btn">View Executive Summary</a>
    </div>
</section>

<main class="main-content">
    <div class="container">
        <section class="section">
            <div class="section-header">
                <h2>Key Highlights</h2>
            </div>
            <div class="grid">
                <div class="stat">
                    <div class="stat-value">56.4M+</div>
                    <div class="stat-label">Social Media Users in Egypt (2024)</div>
                </div>
                <div class="stat">
                    <div class="stat-value">$9.61B</div>
                    <div class="stat-label">Global Social Listening Market (2025)</div>
                </div>
                <div class="stat">
                    <div class="stat-value">6-8%</div>
                    <div class="stat-label">Target Market Share by 2035</div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section-header">
                <h2>Market Overview</h2>
            </div>
            <p>The social media listening and social engineering market in Egypt presents a significant opportunity for TERM Reputation Management. With over 56.4 million social media users in Egypt as of 2024, and a growing demand for reputation management services, TERM is positioned to capture a substantial market share.</p>
            <p>Our analysis indicates strong growth potential in key sectors including Banking, Retail, Telecommunications, and Tourism, with a competitive edge in Arabic language processing capabilities.</p>
            <div class="grid">
                <div class="card">
                    <div class="card-header">
                        <h3>Target Sectors</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Banking & Financial Services</li>
                            <li>Retail & E-commerce</li>
                            <li>Telecommunications</li>
                            <li>Tourism & Hospitality</li>
                            <li>Government & Public Sector</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Competitive Advantage</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Advanced Arabic language processing</li>
                            <li>Local market expertise</li>
                            <li>Comprehensive service offerings</li>
                            <li>Customized solutions for Egyptian market</li>
                            <li>Strong data security protocols</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section-header">
                <h2>Explore the Full Study</h2>
            </div>
            <div class="grid">
                <div class="card">
                    <div class="card-header">
                        <h3>Executive Summary</h3>
                    </div>
                    <div class="card-body">
                        <p>Overview of key findings, market potential, and strategic recommendations for TERM Reputation Management in Egypt.</p>
                        <a href="{{route('executive_summary')}}" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Market Analysis</h3>
                    </div>
                    <div class="card-body">
                        <p>Detailed analysis of market size, growth projections, target sectors, and competitive landscape in Egypt.</p>
                        <a href="{{route('market_analysis')}}" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Market Share Analysis</h3>
                    </div>
                    <div class="card-body">
                        <p>Comprehensive assessment of current market share distribution and TERM's potential positioning.</p>
                        <a href="{{route('market_share')}}" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Growth Strategies</h3>
                    </div>
                    <div class="card-body">
                        <p>Strategic roadmap for market entry, expansion, and long-term growth in the Egyptian market.</p>
                        <a href="{{route('growth_strategies')}}" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
@push('scripts')
@endpush
