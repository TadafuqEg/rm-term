// Interactive elements for TERM Reputation Management website

// Function to handle mobile menu toggle
function setupMobileMenu() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileMenuBtn && navMenu) {
      mobileMenuBtn.addEventListener('click', () => {
        navMenu.classList.toggle('active');
      });
    }
  }
  
  // Function to handle smooth scrolling for anchor links
  function setupSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }
  
  // Function to create interactive charts
  function createCharts() {
    // Check if Chart.js is loaded and if we have chart containers
    if (typeof Chart === 'undefined' || !document.getElementById('marketGrowthChart')) {
      return;
    }
    
    // Market Growth Chart
    const marketGrowthCtx = document.getElementById('marketGrowthChart').getContext('2d');
    new Chart(marketGrowthCtx, {
      type: 'line',
      data: {
        labels: ['2025', '2027', '2029', '2031', '2033', '2035'],
        datasets: [{
          label: 'Market Size (Billion USD)',
          data: [9.61, 12.5, 17.5, 35.8, 65.2, 107],
          backgroundColor: 'rgba(201, 162, 39, 0.2)',
          borderColor: 'rgba(201, 162, 39, 1)',
          borderWidth: 2,
          tension: 0.3
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
            title: {
              display: true,
              text: 'Billion USD'
            }
          },
          x: {
            title: {
              display: true,
              text: 'Year'
            }
          }
        }
      }
    });
    
    // Market Share Chart
    if (document.getElementById('marketShareChart')) {
      const marketShareCtx = document.getElementById('marketShareChart').getContext('2d');
      new Chart(marketShareCtx, {
        type: 'pie',
        data: {
          labels: ['Global Players', 'Regional Players', 'Local Players', 'TERM (Target)'],
          datasets: [{
            data: [45, 30, 19, 6],
            backgroundColor: [
              'rgba(26, 54, 93, 0.8)',
              'rgba(44, 124, 125, 0.8)',
              'rgba(201, 162, 39, 0.8)',
              'rgba(220, 53, 69, 0.8)'
            ],
            borderColor: [
              'rgba(26, 54, 93, 1)',
              'rgba(44, 124, 125, 1)',
              'rgba(201, 162, 39, 1)',
              'rgba(220, 53, 69, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              position: 'bottom'
            }
          }
        }
      });
    }
  }
  
  // Function to add chart containers to appropriate pages
  function addChartContainers() {
    // Add market growth chart to market analysis page
    const marketAnalysisSection = document.querySelector('.market-analysis-section');
    if (marketAnalysisSection) {
      const chartContainer = document.createElement('div');
      chartContainer.className = 'chart-container';
      chartContainer.style.height = '400px';
      chartContainer.style.marginBottom = '2rem';
      
      const canvas = document.createElement('canvas');
      canvas.id = 'marketGrowthChart';
      chartContainer.appendChild(canvas);
      
      // Insert after the first heading in the section
      const heading = marketAnalysisSection.querySelector('h3');
      if (heading) {
        heading.parentNode.insertBefore(chartContainer, heading.nextSibling);
      } else {
        marketAnalysisSection.appendChild(chartContainer);
      }
    }
    
    // Add market share chart to market share page
    const marketShareSection = document.querySelector('.market-share-section');
    if (marketShareSection) {
      const chartContainer = document.createElement('div');
      chartContainer.className = 'chart-container';
      chartContainer.style.height = '400px';
      chartContainer.style.marginBottom = '2rem';
      
      const canvas = document.createElement('canvas');
      canvas.id = 'marketShareChart';
      chartContainer.appendChild(canvas);
      
      // Insert after the first heading in the section
      const heading = marketShareSection.querySelector('h3');
      if (heading) {
        heading.parentNode.insertBefore(chartContainer, heading.nextSibling);
      } else {
        marketShareSection.appendChild(chartContainer);
      }
    }
  }
  
  // Function to add slide navigation
  function addSlideNavigation() {
    const slides = document.querySelectorAll('.slide');
    if (slides.length <= 1) return;
    
    slides.forEach((slide, index) => {
      // Add ID to each slide
      slide.id = `slide-${index}`;
      
      // Create navigation controls for each slide except the last one
      if (index < slides.length - 1) {
        const nextButton = document.createElement('a');
        nextButton.href = `#slide-${index + 1}`;
        nextButton.className = 'btn btn-primary slide-nav-btn';
        nextButton.textContent = 'Next';
        nextButton.style.marginTop = '1rem';
        nextButton.style.display = 'inline-block';
        slide.appendChild(nextButton);
      }
      
      // Create back button for each slide except the first one
      if (index > 0) {
        const backButton = document.createElement('a');
        backButton.href = `#slide-${index - 1}`;
        backButton.className = 'btn slide-nav-btn';
        backButton.textContent = 'Previous';
        backButton.style.marginTop = '1rem';
        backButton.style.marginRight = '1rem';
        backButton.style.display = 'inline-block';
        slide.appendChild(backButton);
      }
    });
  }
  
  // Function to add image lightbox functionality
  function setupImageLightbox() {
    const slideImages = document.querySelectorAll('.slide-image');
    
    slideImages.forEach(image => {
      // Make images clickable
      image.style.cursor = 'pointer';
      
      // Add click event
      image.addEventListener('click', function() {
        // Create lightbox elements
        const lightbox = document.createElement('div');
        lightbox.className = 'lightbox';
        lightbox.style.position = 'fixed';
        lightbox.style.top = '0';
        lightbox.style.left = '0';
        lightbox.style.width = '100%';
        lightbox.style.height = '100%';
        lightbox.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
        lightbox.style.display = 'flex';
        lightbox.style.alignItems = 'center';
        lightbox.style.justifyContent = 'center';
        lightbox.style.zIndex = '1000';
        
        // Create image element
        const lightboxImg = document.createElement('img');
        lightboxImg.src = this.src;
        lightboxImg.style.maxWidth = '90%';
        lightboxImg.style.maxHeight = '90%';
        lightboxImg.style.objectFit = 'contain';
        
        // Create close button
        const closeBtn = document.createElement('span');
        closeBtn.textContent = '×';
        closeBtn.style.position = 'absolute';
        closeBtn.style.top = '20px';
        closeBtn.style.right = '30px';
        closeBtn.style.color = 'white';
        closeBtn.style.fontSize = '40px';
        closeBtn.style.fontWeight = 'bold';
        closeBtn.style.cursor = 'pointer';
        
        // Add close functionality
        closeBtn.addEventListener('click', function() {
          document.body.removeChild(lightbox);
        });
        
        // Also close when clicking outside the image
        lightbox.addEventListener('click', function(e) {
          if (e.target === lightbox) {
            document.body.removeChild(lightbox);
          }
        });
        
        // Add elements to lightbox
        lightbox.appendChild(lightboxImg);
        lightbox.appendChild(closeBtn);
        
        // Add lightbox to body
        document.body.appendChild(lightbox);
      });
    });
  }
  
  // Function to add section highlighting based on scroll position
  function setupScrollHighlighting() {
    const sections = document.querySelectorAll('.section');
    const navLinks = document.querySelectorAll('nav ul li a');
    
    if (sections.length === 0 || navLinks.length === 0) return;
    
    window.addEventListener('scroll', function() {
      let current = '';
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= (sectionTop - 200)) {
          current = section.getAttribute('id');
        }
      });
      
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').includes(current)) {
          link.classList.add('active');
        }
      });
    });
  }
  
  // Initialize all interactive elements
  function initInteractiveElements() {
    // Load Chart.js from CDN
    const chartScript = document.createElement('script');
    chartScript.src = 'https://cdn.jsdelivr.net/npm/chart.js';
    chartScript.onload = function() {
      // Once Chart.js is loaded, create charts
      addChartContainers();
      createCharts();
    };
    document.head.appendChild(chartScript);
    
    // Setup other interactive elements
    setupMobileMenu();
    setupSmoothScrolling();
    addSlideNavigation();
    setupImageLightbox();
    setupScrollHighlighting();
    
    console.log('Interactive elements initialized');
  }
  
  // Run initialization when DOM is fully loaded
  document.addEventListener('DOMContentLoaded', initInteractiveElements);
  