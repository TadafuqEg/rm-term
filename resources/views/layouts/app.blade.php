<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from vpuzjhcm.manus.space/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Apr 2025 09:34:18 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'home')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;family=Open+Sans:wght@400;500;600&amp;display=swap"
        rel="stylesheet">
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

        .hero {
            background-color: var(--primary);
            color: var(--light-text);
            padding: 4rem 0;
            text-align: center;
        }

        .hero h1 {
            color: var(--light-text);
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto 2rem;
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

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: var(--primary);
            color: var(--light-text);
            padding: 1rem;
        }

        .card-body {
            padding: 1.5rem;
        }

        .stat {
            text-align: center;
            padding: 1.5rem;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--text);
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

            .hero h1 {
                font-size: 2.5rem;
            }

            .grid {
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
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>
    <script src="{{ asset('assets/interactive.js') }}"></script>
    <footer-btn></footer-btn>
    <script>
        // 定义自定义元素
        class FooterBtn extends HTMLElement {
            constructor() {
                super();
                // 创建 Shadow DOM
                const shadow = this.attachShadow({
                    mode: 'open'
                });
                // 创建组件的HTML结构
                const wrapper = document.createElement('div');
                wrapper.setAttribute('class', 'wrapper');
                // 添加一些内容到组件中
                wrapper.innerHTML = `
                <div class="page-footer">
                    <div class="tooltip-dialog">Not an official Manus website nor endorsed by Manus. Content may contain inaccuracies; double-check before use. Do not submit passwords, credit cards, or personal information.</div>
                    <div class="footer-close-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_5850_97234)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.733398 8.00104C0.733398 3.98777 3.9868 0.734375 8.00006 0.734375C12.0133 0.734375 15.2667 3.98777 15.2667 8.00104C15.2667 12.0143 12.0133 15.2677 8.00006 15.2677C3.9868 15.2677 0.733398 12.0143 0.733398 8.00104Z" fill="white"/>
                        <path d="M1.2334 8.00104C1.2334 4.26391 4.26294 1.23438 8.00006 1.23438C11.7372 1.23438 14.7667 4.26391 14.7667 8.00104C14.7667 11.7382 11.7372 14.7677 8.00006 14.7677C4.26294 14.7677 1.2334 11.7382 1.2334 8.00104Z" stroke="black" stroke-opacity="0.14" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.57576 5.57613C5.81007 5.34181 6.18997 5.34181 6.42429 5.57613L8.00002 7.15186L9.57576 5.57613C9.81007 5.34181 10.19 5.34181 10.4243 5.57613C10.6586 5.81044 10.6586 6.19034 10.4243 6.42465L8.84855 8.00039L10.4243 9.57613C10.6586 9.81044 10.6586 10.1903 10.4243 10.4247C10.19 10.659 9.81007 10.659 9.57576 10.4247L8.00002 8.84892L6.42429 10.4247C6.18997 10.659 5.81007 10.659 5.57576 10.4247C5.34145 10.1903 5.34145 9.81044 5.57576 9.57613L7.1515 8.00039L5.57576 6.42465C5.34145 6.19034 5.34145 5.81044 5.57576 5.57613Z" fill="#858481"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_5850_97234">
                        <rect width="16" height="16" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="footer-bg">
                        <div class="tooltip-box">
                            <div class="tooltip-desc">This user-generated website was created with AI. Use with caution.</div>
                            <span
                                class="tooltip-icon"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_4345_83044)">
                                        <path
                                            d="M6 8V6M6 4H6.005M11 6C11 8.76142 8.76142 11 6 11C3.23858 11 1 8.76142 1 6C1 3.23858 3.23858 1 6 1C8.76142 1 11 3.23858 11 6Z"
                                            stroke="#858481"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4345_83044">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <a href="https://manus.im/invitation?from=space" target="_blank" class="footer-button">
                        <span class="footer-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path
                                    d="M13.2251 16.9379C14.4717 16.147 15.3336 11.9052 15.144 10.6421C15.144 10.6421 14.9464 9.96396 14.4643 9.96394C13.9821 9.96391 13.7815 10.4719 13.7815 10.4719C13.7815 10.4719 13.6546 10.9409 13.4555 11.5313C13.1474 12.4447 13.0178 13.5718 12.2143 13.8571C11.4107 14.1425 10.6071 13.8725 10.6071 13.8725C11.1535 15.9448 11.9785 17.7288 13.2251 16.9379Z"
                                    fill="white"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M7.04826 9.17689C6.59029 9.22824 6.34906 9.40136 6.26768 9.48274C5.94625 9.80417 5.78554 10.1256 5.78554 10.2863C5.78554 10.447 5.40745 9.53393 5.32437 9.44837C5.07703 9.19366 5.083 8.78667 5.33771 8.53933C5.69527 8.19212 6.28003 7.96925 6.90502 7.89918C7.55323 7.82651 8.3219 7.9075 9.09971 8.25205C10.0075 8.65415 10.4937 9.50199 10.6773 10.2768C10.7705 10.6701 10.7943 11.0743 10.7466 11.4426C10.7002 11.8002 10.5781 12.1826 10.3242 12.4736C9.79525 13.0799 9.01508 13.0116 8.593 12.9221C8.35518 12.8716 8.14542 12.7975 7.99786 12.738C7.92303 12.7079 7.86158 12.6804 7.81747 12.6597C7.79535 12.6493 7.77743 12.6406 7.7642 12.6341C7.75757 12.6308 7.75211 12.628 7.74786 12.6259L7.7424 12.6231L7.74037 12.622L7.73915 12.6214C7.73915 12.6214 7.7388 12.6212 8.03568 12.051L7.7388 12.6212C7.42389 12.4573 7.30152 12.069 7.46548 11.7541C7.62912 11.4398 8.01612 11.3173 8.3307 11.4798M8.3307 11.4798L8.33145 11.4802L8.3307 11.4798ZM8.3307 11.4798L8.33531 11.4822C8.34052 11.4847 8.3498 11.4893 8.36271 11.4953C8.38864 11.5075 8.42852 11.5254 8.4788 11.5457C8.58146 11.5871 8.71705 11.6341 8.85982 11.6644C9.19892 11.7363 9.32081 11.668 9.3554 11.6284C9.38325 11.5965 9.44396 11.4899 9.47154 11.2773C9.49771 11.0755 9.48663 10.8281 9.42625 10.5733C9.30267 10.0519 9.00685 9.61712 8.57899 9.42759C8.02117 9.1805 7.48301 9.12815 7.04826 9.17689"
                                    fill="white"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M2.79812 2.53348C2.64176 2.85224 2.7734 3.2374 3.09216 3.39376C3.55 3.61834 3.94731 3.83979 4.34068 4.28331C4.57627 4.54892 4.98258 4.57326 5.2482 4.33767C5.51381 4.10208 5.53815 3.69577 5.30256 3.43016C4.742 2.79815 4.16499 2.48794 3.65839 2.23944C3.33963 2.08308 2.95448 2.21473 2.79812 2.53348Z"
                                    fill="white"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M6.27275 0.662519C5.92831 0.748629 5.71889 1.09766 5.805 1.4421C5.86516 1.68274 5.92127 1.8885 5.97263 2.07686C6.07093 2.43738 6.15185 2.73415 6.21054 3.08969C6.26837 3.43999 6.59923 3.67708 6.94952 3.61926C7.29982 3.56143 7.53692 3.23058 7.47909 2.88028C7.40972 2.46006 7.3017 2.06246 7.19328 1.66338C7.14526 1.48666 7.09717 1.30966 7.05233 1.13027C6.96622 0.785827 6.61719 0.57641 6.27275 0.662519Z"
                                    fill="white"
                                />
                                <path
                                    d="M8.99979 3.21456C9.16051 2.57171 9.32122 2.08956 9.61377 1.60742"
                                    stroke="white"
                                    stroke-width="1.28571"
                                    stroke-miterlimit="10"
                                    stroke-linecap="round"
                                />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M11.3613 6.26832C12.6366 6.52316 12.6368 6.52221 12.6368 6.52221L12.637 6.52126L12.6373 6.51931L12.6381 6.51527L12.6396 6.50658C12.6407 6.50054 12.6418 6.49395 12.6429 6.48687C12.6452 6.47271 12.6476 6.45641 12.65 6.43816C12.6548 6.40191 12.6596 6.35662 12.6628 6.30419C12.6689 6.20315 12.6702 6.05635 12.6443 5.88608C12.5954 5.56354 12.4075 4.95215 11.7455 4.59774L11.6146 4.52762L11.4715 4.48801L11.1424 5.7144C11.4358 5.8715 11.3613 6.26832 11.3613 6.26832ZM11.1573 7.07742L11.3613 6.26832L12.6366 6.52316L12.6296 6.56049L12.4237 7.37732C12.3841 7.57807 12.3789 7.69285 12.381 7.75349C12.3828 7.80284 12.3892 7.81904 12.3924 7.82698L12.3927 7.8279C12.4008 7.84841 12.4216 7.89289 12.4977 8.00832C12.5287 8.05537 12.561 8.10252 12.6021 8.1626C12.613 8.1785 12.6245 8.19531 12.6367 8.21327C12.6919 8.29416 12.7565 8.38953 12.825 8.49621C13.2527 9.16281 13.2947 9.80259 13.2925 10.2126C13.2924 10.2186 13.2924 10.2246 13.2923 10.2305C13.3435 10.2481 13.3978 10.2658 13.4555 10.2841C13.4745 10.2902 13.4997 10.2982 13.5262 10.3065C13.5634 10.3183 13.6031 10.3308 13.6314 10.3399C13.6872 10.3577 13.7584 10.381 13.8272 10.4067C13.8751 10.4245 13.9211 10.4423 13.9644 10.4603C14.0059 10.4775 14.0566 10.4995 14.1099 10.5264C14.1513 10.5473 14.2186 10.5831 14.2948 10.6359L14.9647 10.9242L14.955 11.7823C14.9493 12.2868 14.7463 12.8187 14.6023 13.148C14.4436 13.5111 14.2339 13.8983 14.0408 14.1556C13.7712 14.515 13.4657 14.8945 13.0981 15.1372C12.8815 15.2802 12.6198 15.394 12.3111 15.4313C12.0361 15.4645 11.7981 15.4277 11.6232 15.3851L11.5717 15.3745C11.5199 15.3639 11.4456 15.3486 11.3553 15.3298C11.1748 15.2922 10.9287 15.2404 10.6678 15.1837C10.1867 15.0793 9.53471 14.9331 9.22715 14.8311L9.20492 14.8237L9.18296 14.8155C9.04655 14.7649 8.81591 14.7081 8.43387 14.621C8.41077 14.6157 8.38722 14.6103 8.36328 14.6049C8.03371 14.5299 7.6281 14.4376 7.24401 14.3212C6.8462 14.2008 6.35418 14.0216 5.9364 13.7296C5.4979 13.4232 4.99936 12.8829 4.9716 12.0723C4.96744 11.951 4.97023 11.8337 4.97774 11.7224C4.78027 11.5084 4.61454 11.2286 4.53078 10.8703C4.44918 10.5212 4.49431 10.2118 4.55156 9.99459C4.60897 9.7768 4.69617 9.58643 4.76904 9.44413C4.79364 9.3961 4.81915 9.34874 4.8446 9.30298C4.60356 9.22692 4.3313 9.13294 4.06631 9.01999C3.72023 8.87246 3.22918 8.62908 2.86258 8.2362C2.66514 8.0246 2.4584 7.72132 2.37481 7.3248C2.28733 6.90985 2.36002 6.51171 2.53036 6.1708C2.94502 5.34093 3.73706 5.04773 4.44152 5.02237C5.07762 4.99946 5.75449 5.17745 6.36097 5.39016C6.91355 5.58397 7.70443 5.94444 8.3763 6.25842C8.5976 5.89554 8.88932 5.48549 9.16548 5.15432L9.22034 5.08854L9.28382 5.03075C9.75896 4.59828 10.2927 4.45288 10.6994 4.42169C10.8988 4.4064 11.0705 4.41781 11.1989 4.43448C11.2638 4.44291 11.3198 4.45295 11.3652 4.46245C11.388 4.46721 11.4083 4.47188 11.426 4.4762C11.4349 4.47837 11.4431 4.48045 11.4507 4.48243L11.4616 4.48531L11.4666 4.48668L11.4691 4.48735L11.4703 4.48768C11.4703 4.48768 11.4715 4.48801 11.1424 5.7144C11.1424 5.7144 10.6292 5.57232 10.188 5.96175C10.1836 5.96567 10.1792 5.96965 10.1747 5.97368C10.161 5.99009 10.1473 6.0067 10.1336 6.02351C10.1139 6.04768 10.0941 6.07224 10.0743 6.09711C10.0685 6.10441 10.0627 6.11174 10.0569 6.1191C9.61666 6.67768 9.64277 6.91103 8.83914 7.87543C8.83914 7.87543 8.4205 7.68157 8.1701 7.56386C7.9983 7.48311 7.81669 7.39774 7.63164 7.31169C7.03464 7.03411 6.40173 6.74946 5.94628 6.58972C4.82494 6.19643 3.99821 6.14651 3.69645 6.75042C3.29839 7.54707 4.9148 8.00866 5.72705 8.24061C5.8981 8.28945 6.03349 8.32811 6.10689 8.35758C6.52348 8.52479 6.55255 8.86031 6.42848 9.16103C6.35609 9.33651 6.31482 9.43541 6.10706 9.64317C5.78563 9.9646 5.73292 10.3452 5.7943 10.6078C5.82503 10.7392 5.88582 10.8348 5.95809 10.9044C6.15197 11.0909 6.42842 11.0897 6.42842 11.0897C6.42842 11.0897 6.25016 11.5453 6.26759 12.0541C6.27143 12.1661 6.30155 12.268 6.35346 12.3612C6.66163 12.9145 7.73774 13.1596 8.64189 13.3655C9.02162 13.452 9.37102 13.5316 9.62046 13.6242C10.0676 13.7726 11.8925 14.1433 11.8925 14.1433C12.2292 14.2317 12.438 14.1247 12.9919 13.3864C13.2219 13.0797 13.653 12.2123 13.6583 11.7435C13.5884 11.7134 13.5835 11.7029 13.5786 11.6924C13.5718 11.6779 13.565 11.6633 13.3882 11.5974C13.329 11.5754 13.2499 11.5504 13.1593 11.5218C12.7822 11.4029 12.2071 11.2215 12.0534 10.929C11.9788 10.787 11.9846 10.5964 11.9915 10.3736C12.0022 10.0271 12.0153 9.60261 11.732 9.16115C11.6624 9.05276 11.5957 8.95523 11.5333 8.864C11.1781 8.34469 10.9626 8.0296 11.1573 7.07742ZM5.21736 8.64574C5.21818 8.64341 5.21787 8.64394 5.21684 8.64717L5.21736 8.64574ZM13.2859 10.6214C13.2859 10.6214 13.2859 10.6164 13.2849 10.6077C13.2852 10.6173 13.2859 10.6214 13.2859 10.6214Z"
                                    fill="white"
                                />
                            </svg>
                        </span>
                        <div class="title">Made with Manus</div>
                        <div class="create-title">Create my website</div>
                    </a>
                </div>

                <div class="page-footer-mobile">
                    <div class="footer-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path
                                d="M13.2251 16.9379C14.4717 16.147 15.3336 11.9052 15.144 10.6421C15.144 10.6421 14.9464 9.96396 14.4643 9.96394C13.9821 9.96391 13.7815 10.4719 13.7815 10.4719C13.7815 10.4719 13.6546 10.9409 13.4555 11.5313C13.1474 12.4447 13.0178 13.5718 12.2143 13.8571C11.4107 14.1425 10.6071 13.8725 10.6071 13.8725C11.1535 15.9448 11.9785 17.7288 13.2251 16.9379Z"
                                fill="white"
                            />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.04826 9.17689C6.59029 9.22824 6.34906 9.40136 6.26768 9.48274C5.94625 9.80417 5.78554 10.1256 5.78554 10.2863C5.78554 10.447 5.40745 9.53393 5.32437 9.44837C5.07703 9.19366 5.083 8.78667 5.33771 8.53933C5.69527 8.19212 6.28003 7.96925 6.90502 7.89918C7.55323 7.82651 8.3219 7.9075 9.09971 8.25205C10.0075 8.65415 10.4937 9.50199 10.6773 10.2768C10.7705 10.6701 10.7943 11.0743 10.7466 11.4426C10.7002 11.8002 10.5781 12.1826 10.3242 12.4736C9.79525 13.0799 9.01508 13.0116 8.593 12.9221C8.35518 12.8716 8.14542 12.7975 7.99786 12.738C7.92303 12.7079 7.86158 12.6804 7.81747 12.6597C7.79535 12.6493 7.77743 12.6406 7.7642 12.6341C7.75757 12.6308 7.75211 12.628 7.74786 12.6259L7.7424 12.6231L7.74037 12.622L7.73915 12.6214C7.73915 12.6214 7.7388 12.6212 8.03568 12.051L7.7388 12.6212C7.42389 12.4573 7.30152 12.069 7.46548 11.7541C7.62912 11.4398 8.01612 11.3173 8.3307 11.4798M8.3307 11.4798L8.33145 11.4802L8.3307 11.4798ZM8.3307 11.4798L8.33531 11.4822C8.34052 11.4847 8.3498 11.4893 8.36271 11.4953C8.38864 11.5075 8.42852 11.5254 8.4788 11.5457C8.58146 11.5871 8.71705 11.6341 8.85982 11.6644C9.19892 11.7363 9.32081 11.668 9.3554 11.6284C9.38325 11.5965 9.44396 11.4899 9.47154 11.2773C9.49771 11.0755 9.48663 10.8281 9.42625 10.5733C9.30267 10.0519 9.00685 9.61712 8.57899 9.42759C8.02117 9.1805 7.48301 9.12815 7.04826 9.17689"
                                fill="white"
                            />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M2.79812 2.53348C2.64176 2.85224 2.7734 3.2374 3.09216 3.39376C3.55 3.61834 3.94731 3.83979 4.34068 4.28331C4.57627 4.54892 4.98258 4.57326 5.2482 4.33767C5.51381 4.10208 5.53815 3.69577 5.30256 3.43016C4.742 2.79815 4.16499 2.48794 3.65839 2.23944C3.33963 2.08308 2.95448 2.21473 2.79812 2.53348Z"
                                fill="white"
                            />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M6.27275 0.662519C5.92831 0.748629 5.71889 1.09766 5.805 1.4421C5.86516 1.68274 5.92127 1.8885 5.97263 2.07686C6.07093 2.43738 6.15185 2.73415 6.21054 3.08969C6.26837 3.43999 6.59923 3.67708 6.94952 3.61926C7.29982 3.56143 7.53692 3.23058 7.47909 2.88028C7.40972 2.46006 7.3017 2.06246 7.19328 1.66338C7.14526 1.48666 7.09717 1.30966 7.05233 1.13027C6.96622 0.785827 6.61719 0.57641 6.27275 0.662519Z"
                                fill="white"
                            />
                            <path
                                d="M8.99979 3.21456C9.16051 2.57171 9.32122 2.08956 9.61377 1.60742"
                                stroke="white"
                                stroke-width="1.28571"
                                stroke-miterlimit="10"
                                stroke-linecap="round"
                            />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M11.3613 6.26832C12.6366 6.52316 12.6368 6.52221 12.6368 6.52221L12.637 6.52126L12.6373 6.51931L12.6381 6.51527L12.6396 6.50658C12.6407 6.50054 12.6418 6.49395 12.6429 6.48687C12.6452 6.47271 12.6476 6.45641 12.65 6.43816C12.6548 6.40191 12.6596 6.35662 12.6628 6.30419C12.6689 6.20315 12.6702 6.05635 12.6443 5.88608C12.5954 5.56354 12.4075 4.95215 11.7455 4.59774L11.6146 4.52762L11.4715 4.48801L11.1424 5.7144C11.4358 5.8715 11.3613 6.26832 11.3613 6.26832ZM11.1573 7.07742L11.3613 6.26832L12.6366 6.52316L12.6296 6.56049L12.4237 7.37732C12.3841 7.57807 12.3789 7.69285 12.381 7.75349C12.3828 7.80284 12.3892 7.81904 12.3924 7.82698L12.3927 7.8279C12.4008 7.84841 12.4216 7.89289 12.4977 8.00832C12.5287 8.05537 12.561 8.10252 12.6021 8.1626C12.613 8.1785 12.6245 8.19531 12.6367 8.21327C12.6919 8.29416 12.7565 8.38953 12.825 8.49621C13.2527 9.16281 13.2947 9.80259 13.2925 10.2126C13.2924 10.2186 13.2924 10.2246 13.2923 10.2305C13.3435 10.2481 13.3978 10.2658 13.4555 10.2841C13.4745 10.2902 13.4997 10.2982 13.5262 10.3065C13.5634 10.3183 13.6031 10.3308 13.6314 10.3399C13.6872 10.3577 13.7584 10.381 13.8272 10.4067C13.8751 10.4245 13.9211 10.4423 13.9644 10.4603C14.0059 10.4775 14.0566 10.4995 14.1099 10.5264C14.1513 10.5473 14.2186 10.5831 14.2948 10.6359L14.9647 10.9242L14.955 11.7823C14.9493 12.2868 14.7463 12.8187 14.6023 13.148C14.4436 13.5111 14.2339 13.8983 14.0408 14.1556C13.7712 14.515 13.4657 14.8945 13.0981 15.1372C12.8815 15.2802 12.6198 15.394 12.3111 15.4313C12.0361 15.4645 11.7981 15.4277 11.6232 15.3851L11.5717 15.3745C11.5199 15.3639 11.4456 15.3486 11.3553 15.3298C11.1748 15.2922 10.9287 15.2404 10.6678 15.1837C10.1867 15.0793 9.53471 14.9331 9.22715 14.8311L9.20492 14.8237L9.18296 14.8155C9.04655 14.7649 8.81591 14.7081 8.43387 14.621C8.41077 14.6157 8.38722 14.6103 8.36328 14.6049C8.03371 14.5299 7.6281 14.4376 7.24401 14.3212C6.8462 14.2008 6.35418 14.0216 5.9364 13.7296C5.4979 13.4232 4.99936 12.8829 4.9716 12.0723C4.96744 11.951 4.97023 11.8337 4.97774 11.7224C4.78027 11.5084 4.61454 11.2286 4.53078 10.8703C4.44918 10.5212 4.49431 10.2118 4.55156 9.99459C4.60897 9.7768 4.69617 9.58643 4.76904 9.44413C4.79364 9.3961 4.81915 9.34874 4.8446 9.30298C4.60356 9.22692 4.3313 9.13294 4.06631 9.01999C3.72023 8.87246 3.22918 8.62908 2.86258 8.2362C2.66514 8.0246 2.4584 7.72132 2.37481 7.3248C2.28733 6.90985 2.36002 6.51171 2.53036 6.1708C2.94502 5.34093 3.73706 5.04773 4.44152 5.02237C5.07762 4.99946 5.75449 5.17745 6.36097 5.39016C6.91355 5.58397 7.70443 5.94444 8.3763 6.25842C8.5976 5.89554 8.88932 5.48549 9.16548 5.15432L9.22034 5.08854L9.28382 5.03075C9.75896 4.59828 10.2927 4.45288 10.6994 4.42169C10.8988 4.4064 11.0705 4.41781 11.1989 4.43448C11.2638 4.44291 11.3198 4.45295 11.3652 4.46245C11.388 4.46721 11.4083 4.47188 11.426 4.4762C11.4349 4.47837 11.4431 4.48045 11.4507 4.48243L11.4616 4.48531L11.4666 4.48668L11.4691 4.48735L11.4703 4.48768C11.4703 4.48768 11.4715 4.48801 11.1424 5.7144C11.1424 5.7144 10.6292 5.57232 10.188 5.96175C10.1836 5.96567 10.1792 5.96965 10.1747 5.97368C10.161 5.99009 10.1473 6.0067 10.1336 6.02351C10.1139 6.04768 10.0941 6.07224 10.0743 6.09711C10.0685 6.10441 10.0627 6.11174 10.0569 6.1191C9.61666 6.67768 9.64277 6.91103 8.83914 7.87543C8.83914 7.87543 8.4205 7.68157 8.1701 7.56386C7.9983 7.48311 7.81669 7.39774 7.63164 7.31169C7.03464 7.03411 6.40173 6.74946 5.94628 6.58972C4.82494 6.19643 3.99821 6.14651 3.69645 6.75042C3.29839 7.54707 4.9148 8.00866 5.72705 8.24061C5.8981 8.28945 6.03349 8.32811 6.10689 8.35758C6.52348 8.52479 6.55255 8.86031 6.42848 9.16103C6.35609 9.33651 6.31482 9.43541 6.10706 9.64317C5.78563 9.9646 5.73292 10.3452 5.7943 10.6078C5.82503 10.7392 5.88582 10.8348 5.95809 10.9044C6.15197 11.0909 6.42842 11.0897 6.42842 11.0897C6.42842 11.0897 6.25016 11.5453 6.26759 12.0541C6.27143 12.1661 6.30155 12.268 6.35346 12.3612C6.66163 12.9145 7.73774 13.1596 8.64189 13.3655C9.02162 13.452 9.37102 13.5316 9.62046 13.6242C10.0676 13.7726 11.8925 14.1433 11.8925 14.1433C12.2292 14.2317 12.438 14.1247 12.9919 13.3864C13.2219 13.0797 13.653 12.2123 13.6583 11.7435C13.5884 11.7134 13.5835 11.7029 13.5786 11.6924C13.5718 11.6779 13.565 11.6633 13.3882 11.5974C13.329 11.5754 13.2499 11.5504 13.1593 11.5218C12.7822 11.4029 12.2071 11.2215 12.0534 10.929C11.9788 10.787 11.9846 10.5964 11.9915 10.3736C12.0022 10.0271 12.0153 9.60261 11.732 9.16115C11.6624 9.05276 11.5957 8.95523 11.5333 8.864C11.1781 8.34469 10.9626 8.0296 11.1573 7.07742ZM5.21736 8.64574C5.21818 8.64341 5.21787 8.64394 5.21684 8.64717L5.21736 8.64574ZM13.2859 10.6214C13.2859 10.6214 13.2859 10.6164 13.2849 10.6077C13.2852 10.6173 13.2859 10.6214 13.2859 10.6214Z"
                                fill="white"
                            />
                        </svg>
                        <div class="title">Made with Manus</div>
                        <div class="create-title">Create my website</div>
                    </div>
                    <div class="footer-dialog">
                        <div class="dialog-box">
                            <div class="dialog-header">
                                <div class="dialog-header-title">Made with Manus</div>
                                <span class="dialog-header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M3.2729 3.27192C3.5365 3.00832 3.96389 3.00832 4.22749 3.27192L9.0002 8.04462L13.7729 3.27192C14.0365 3.00832 14.4639 3.00832 14.7275 3.27192C14.9911 3.53553 14.9911 3.96291 14.7275 4.22652L9.95479 8.99922L14.7275 13.7719C14.9911 14.0355 14.9911 14.4629 14.7275 14.7265C14.4639 14.9901 14.0365 14.9901 13.7729 14.7265L9.0002 9.95381L4.22749 14.7265C3.96389 14.9901 3.5365 14.9901 3.2729 14.7265C3.00929 14.4629 3.00929 14.0355 3.2729 13.7719L8.0456 8.99922L3.2729 4.22652C3.00929 3.96291 3.00929 3.53553 3.2729 3.27192Z"
                                            fill="#858481"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div class="dialog-body">
                                <div>This user-generated website was created with AI. Use with caution.</div>
                                <div>
                                    Not an official Manus website nor endorsed by Manus. Content may contain inaccuracies; double-check before use. Do not submit
                                    passwords, credit cards, or personal information.
                                </div>
                            </div>
                            <div class="dialog-footer">
                                <div class="dialog-footer-button-left">Cancel</div>
                                <div class="dialog-footer-button-right" onclick="createSite()">Create my website</div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
                // 创建样式
                const style = document.createElement('style');
                style.textContent = `
            @keyframes changeWidth {
                0% {
                    width: 150px;
                    background-color: transparent;
                }
                100% {
                    width: 574px;
                    background-color: #fff;
                }
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                border: unset;
            }

            * {
                line-height: 1.2;
                text-shadow: initial;
                font-family: 'SF Pro', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            }

            a {
                text-decoration: unset;
            }

            .page-footer-mobile {
                z-index: 10000;
                display: none;
                position: absolute;
                right: 16px;
                bottom: 16px;
            }

            .page-footer {
                z-index: 10000;
                display: flex;
                padding: 4px 4px 4px 12px;
                align-items: center;
                gap: 16px;
                position: fixed;
                right: 16px;
                bottom: 16px;
                border-radius: 24px;
                border: 1px solid transparent;
                background: transparent;
                transition: 0.3s;
            }

            .footer-close-btn {
                display: none;
                z-index: 10002;
                cursor: pointer;
                position: absolute;
                right: -3px;
                top: -3px;
            }

            .footer-bg {
                overflow: hidden;
                position: absolute;
                right: 0px;
                bottom: 0px;
                height: 38px;
                width: 150px;
                background-color: transparent;
                border-radius: 24px;
            }

            .tooltip-box {
                display: none;
                transition: 0.3s;
                z-index: 10001;
                align-items: center;
                gap: 1px;
            }

            .tooltip-desc {
                color: #858481;
                /* Label/Primary */
                font-size: 12px;
                font-style: normal;
                font-weight: 400;
                line-height: 16px; /* 133.333% */
            }

            .footer-button {
                z-index: 10001;
                right: 16px;
                bottom: 16px;
                user-select: none;
                cursor: pointer;
                display: flex;
                padding: 5px 10px;
                align-items: center;
                height: 30px;
                gap: 2px;
                transition: 0.3s;
                border-radius: 14px;
                border: 1px solid rgba(0, 0, 0, 0.06);
                background: #1a1a19;
                box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.06), 0px 8px 32px 0px rgba(0, 0, 0, 0.06);
            }

            .footer-logo {
                width: 18px;
                height: 18px;
            }

            .footer-button:hover .create-title {
                opacity: 0.8;
            }

            .footer-button:hover .footer-logo {
                opacity: 0.8;
            }

            .page-footer:hover .footer-close-btn {
                display: block;
            }

            .page-footer:hover .create-title {
                display: block;
            }

            .page-footer:hover .title {
                display: none;
            }

            .page-footer:hover .footer-bg {
                animation: changeWidth 0.3s ease-in-out forwards;
                border: 1px solid rgba(0, 0, 0, 0.06);
                background: #fff;
                box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.06), 0px 8px 32px 0px rgba(0, 0, 0, 0.06);
            }

            .page-footer:hover .tooltip-box {
                position: absolute;
                text-wrap-mode: nowrap;
                display: flex;
                left: 10px;
                top: 9px;
            }

            .tooltip-icon {
                position: relative;
                cursor: pointer;
            }

            .tooltip-dialog {
                display: none;
                position: absolute;
                bottom: 154%;
                left: -10%;
                transform: translateX(-50%);
                padding: 10px;
                border-radius: 12px;
                font-size: 12px;
                line-height: 16px;
                background-color: #171818;
                color: #fff;
                max-width: 280px;
                width: max-content;
            }

            .title {
                color: #fff;
                font-size: 12px;
                font-style: normal;
                font-weight: 400;
                line-height: 16px;
            }

            .create-title {
                display: none;
                color: #fff;
                font-size: 12px;
                font-style: normal;
                font-weight: 400;
            }

            .footer-dialog {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                display: none;
                justify-content: center;
                align-items: center;
            }

            .dialog-box {
                display: flex;
                width: 358px;
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                border-radius: 20px;
                border: 1px solid rgba(255, 255, 255, 0.04);
                background: #fff;

                /* menu/main */
                box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.02), 0px 4px 32px 0px rgba(0, 0, 0, 0.16);
                backdrop-filter: blur(40px);
            }

            .dialog-header {
                display: flex;
                padding: 16px 12px 8px 16px;
                align-items: flex-start;
                gap: 16px;
                align-self: stretch;
            }

            .dialog-header-title {
                flex: 1;
                color: #34322d;
                font-size: 18px;
                font-style: normal;
                font-weight: 600;
            }

            .dialog-body {
                display: flex;
                padding: 0px 16px;
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
                align-self: stretch;
                color: #535350;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 24px;
            }

            .dialog-footer {
                display: flex;
                padding: 16px;
                align-items: flex-start;
                gap: 12px;
                align-self: stretch;
            }

            .dialog-footer-button-left {
                display: flex;
                width: 119px;
                min-width: 114px;
                min-height: 48px;
                padding: 12px 24px;
                justify-content: center;
                align-items: center;
                gap: 6px;
                border-radius: 12px;
                background: rgba(55, 53, 47, 0.06);
                color: #34322d;
                font-size: 16px;
                font-style: normal;
                font-weight: 600;
            }

            .dialog-footer-button-right {
                display: flex;
                min-width: 114px;
                min-height: 48px;
                padding: 12px 24px;
                justify-content: center;
                align-items: center;
                gap: 6px;
                flex: 1 0 0;
                border-radius: 12px;
                background: #1a1a19;
                color: #fff;
                font-size: 16px;
                font-style: normal;
                font-weight: 600;
            }

            @media (max-width: 600px) {
                .page-footer {
                    display: none;
                }
                .page-footer-mobile {
                    display: block;
                }
                .footer-button {
                    position: fixed
                }
            }
            `;
                // 将样式和内容添加到Shadow DOM
                shadow.appendChild(style);
                shadow.appendChild(wrapper);

                // 在connectedCallback中设置事件监听器
                this.setupEventListeners(shadow);
            }
            onclickEvent(shadow, domStr, fn) {
                const clickDom = shadow.querySelector(domStr);
                if (clickDom) {
                    clickDom.onclick = (event) => {
                        fn(event, clickDom);
                    };
                }
            }
            setupEventListeners(shadow) {
                const changeDialogStyle = (displayStatus) => {
                    const dialog = shadow.querySelector('.footer-dialog');
                    if (dialog) {
                        dialog.style.display = displayStatus;
                    }
                };

                const createSite = () => {
                    window.open('https://manus.im/invitation?from=space', '_blank');
                    changeDialogStyle('none');
                };

                this.onclickEvent(shadow, '.page-footer-mobile .dialog-footer-button-left', () => {
                    changeDialogStyle('none');
                });

                this.onclickEvent(shadow, '.page-footer-mobile .dialog-footer-button-right', () => {
                    createSite();
                });

                this.onclickEvent(shadow, '.page-footer-mobile .dialog-header-icon', () => {
                    changeDialogStyle('none');
                });

                this.onclickEvent(shadow, '.page-footer-mobile .footer-button', () => {
                    changeDialogStyle('flex');
                });

                this.onclickEvent(shadow, '.footer-close-btn', () => {
                    localStorage.setItem('embedClosed', 'true');
                    shadow.querySelector('.page-footer').style.display = 'none';
                    shadow.querySelector('.page-footer-mobile').style.display = 'none';
                });

                this.onclickEvent(shadow, '.page-footer-mobile .footer-dialog', (event, dialog) => {
                    if (event.target === dialog) {
                        changeDialogStyle('none');
                    }
                });

                const tooltipIcon = shadow.querySelector('.tooltip-icon');
                const tooltipDialog = shadow.querySelector('.tooltip-dialog');

                tooltipIcon.addEventListener('mouseenter', function() {
                    tooltipDialog.style.display = 'block';
                });

                tooltipIcon.addEventListener('mouseleave', function() {
                    tooltipDialog.style.display = 'none';
                });

                if (localStorage.getItem('embedClosed')) {
                    shadow.querySelector('.page-footer').style.display = 'none';
                    shadow.querySelector('.page-footer-mobile').style.display = 'none';
                }
            }
        }
        // 注册自定义元素
        customElements.define('footer-btn', FooterBtn);
    </script>
    <script defer data-domain="manus.space" src="{{ asset('assets/tagged-events.js') }}"></script>
    <script>
        window.plausible =
            window.plausible ||
            function() {
                (window.plausible.q = window.plausible.q || []).push(arguments);
            };
        plausible('custom-pageview', {
            props: {
                domain: window.location.host
            }
        })
    </script>
    @stack('scripts')
</body>

<!-- Mirrored from vpuzjhcm.manus.space/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Apr 2025 09:34:21 GMT -->

</html>
