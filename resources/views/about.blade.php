@extends('layouts.app')
@section('title', 'TERM Reputation Management - About')
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
        <h1>About TERM Reputation Management</h1>
    </div>
</section>

<main class="main-content">
    <div class="container">
        <section class="section">
            <div class="section-header">
                <h2>Company Overview</h2>
            </div>
            <p>TERM Reputation Management is a leading provider of social media listening and social engineering solutions, specializing in reputation management for businesses and organizations across various sectors.</p>
            <p>With a focus on advanced technology and local market expertise, TERM delivers comprehensive solutions that help clients monitor, analyze, and manage their online presence effectively.</p>
            
            <h3>Our Mission</h3>
            <p>To empower organizations with actionable insights from social media data, enabling them to make informed decisions, protect their reputation, and build stronger relationships with their customers.</p>
            
            <h3>Our Vision</h3>
            <p>To become the premier reputation management provider in Egypt and the MENA region, recognized for excellence in social media listening, analysis, and strategic response.</p>
            
            <h3>Core Services</h3>
            <ul>
                <li>Social Media Monitoring and Listening</li>
                <li>Sentiment Analysis and Trend Identification</li>
                <li>Crisis Management and Response</li>
                <li>Competitive Intelligence</li>
                <li>Strategic Reputation Management</li>
                <li>Custom Analytics and Reporting</li>
            </ul>
            
            <div class="navigation-controls">
                <a href="{{route('home')}}" class="btn">Back to Home</a>
            </div>
        </section>
    </div>
</main>

@endsection
@push('scripts')
@endpush
