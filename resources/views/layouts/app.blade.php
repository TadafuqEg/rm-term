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
