<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VimoroToday - Professional Interior Design Services | Transform Your Space</title>
    <meta name="description" content="VimoroToday offers professional interior design services to transform your home and office spaces. Expert consultation, space planning, and complete makeovers with personalized approach.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .vmt-header-9x4k {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .vmt-nav-container-7h2m {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .vmt-logo-8k3p {
            font-size: 2rem;
            font-weight: bold;
            color: #ecf0f1;
        }

        .vmt-nav-menu-5j9r {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .vmt-nav-menu-5j9r a {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .vmt-nav-menu-5j9r a:hover {
            color: #3498db;
        }

        .vmt-hero-section-4m8n {
            background: linear-gradient(rgba(52, 73, 94, 0.8), rgba(44, 62, 80, 0.8)), url('https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .vmt-hero-content-6p2l {
            max-width: 800px;
            padding: 2rem;
        }

        .vmt-hero-title-3q7w {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .vmt-hero-subtitle-9r4t {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .vmt-cta-button-8h5k {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .vmt-cta-button-8h5k:hover {
            background: #c0392b;
        }

        .vmt-services-section-2n6m {
            padding: 80px 0;
            background: white;
        }

        .vmt-container-1x9p {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .vmt-section-title-4k7j {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .vmt-services-grid-5m3q {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .vmt-service-card-7p8w {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .vmt-service-card-7p8w:hover {
            transform: translateY(-5px);
        }

        .vmt-service-icon-9q2r {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .vmt-about-section-6n4l {
            padding: 80px 0;
            background: linear-gradient(135deg, #ecf0f1, #bdc3c7);
        }

        .vmt-about-content-8m7k {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .vmt-about-text-3p9j {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .vmt-about-image-2q5n {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .vmt-about-image-2q5n img {
            width: 100%;
            height: auto;
            display: block;
        }

        .vmt-history-section-4r8m {
            padding: 80px 0;
            background: white;
        }

        .vmt-timeline-9k3p {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .vmt-timeline-item-7j2q {
            background: #f8f9fa;
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 10px;
            border-left: 5px solid #3498db;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .vmt-timeline-year-5n8w {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 0.5rem;
        }

        .vmt-reviews-section-6m4k {
            padding: 80px 0;
            background: linear-gradient(135deg, #34495e, #2c3e50);
            color: white;
        }

        .vmt-reviews-grid-8p7l {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .vmt-review-card-3q9n {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .vmt-review-stars-7k2m {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .vmt-review-author-4n8p {
            font-weight: bold;
            margin-top: 1rem;
            color: #ecf0f1;
        }

        .vmt-process-section-9j5q {
            padding: 80px 0;
            background: white;
        }

        .vmt-process-steps-2m7k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .vmt-process-step-6p3n {
            text-align: center;
            padding: 2rem;
        }

        .vmt-step-number-8q4r {
            background: #3498db;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .vmt-footer-7n2m {
            background: #2c3e50;
            color: white;
            padding: 3rem 0 1rem;
        }

        .vmt-footer-content-4k8p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .vmt-footer-section-9m5q {
            padding: 1rem;
        }

        .vmt-footer-title-3p7k {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #ecf0f1;
        }

        .vmt-contact-info-6j4n {
            list-style: none;
        }

        .vmt-contact-info-6j4n li {
            margin-bottom: 0.5rem;
        }

        .vmt-contact-info-6j4n a {
            color: #bdc3c7;
            text-decoration: none;
        }

        .vmt-contact-info-6j4n a:hover {
            color: #3498db;
        }

        .vmt-footer-bottom-8r3m {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #34495e;
            color: #bdc3c7;
        }

        .vmt-modal-overlay-5k9p {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .vmt-modal-content-7m2q {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .vmt-modal-close-3n8k {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }

        .vmt-expertise-section-4q7m {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .vmt-expertise-grid-6k3p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .vmt-expertise-card-8n5q {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .vmt-expertise-card-8n5q:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .vmt-team-section-9p4k {
            padding: 80px 0;
            background: white;
        }

        .vmt-team-grid-2m7n {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .vmt-team-member-5q8p {
            text-align: center;
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .vmt-team-member-5q8p:hover {
            transform: scale(1.05);
        }

        .vmt-member-photo-7k2m {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            background: #3498db;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
        }

        @media (max-width: 768px) {
            .vmt-nav-menu-5j9r {
                display: none;
            }
            
            .vmt-hero-title-3q7w {
                font-size: 2.5rem;
            }
            
            .vmt-about-content-8m7k {
                grid-template-columns: 1fr;
            }
            
            .vmt-hero-section-4m8n {
                height: 70vh;
            }
        }
    </style>
</head>
<body>
    <header class="vmt-header-9x4k">
        <nav class="vmt-nav-container-7h2m">
            <div class="vmt-logo-8k3p">VimoroToday</div>
            <ul class="vmt-nav-menu-5j9r">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#expertise">Expertise</a></li>
                <li><a href="#process">Process</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a onclick="showModal('privacy')">Privacy</a></li>
                <li><a onclick="showModal('terms')">Terms</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="vmt-hero-section-4m8n">
        <div class="vmt-hero-content-6p2l">
            <h1 class="vmt-hero-title-3q7w">Transform Your Space</h1>
            <p class="vmt-hero-subtitle-9r4t">Professional interior design services that bring your vision to life with creativity and expertise</p>
            <a href="#contact" class="vmt-cta-button-8h5k">Get Started Today</a>
        </div>
    </section>

    <section id="services" class="vmt-services-section-2n6m">
        <div class="vmt-container-1x9p">
            <h2 class="vmt-section-title-4k7j">Our Services</h2>
            <div class="vmt-services-grid-5m3q">
                <div class="vmt-service-card-7p8w">
                    <div class="vmt-service-icon-9q2r">🏠</div>
                    <h3>Residential Design</h3>
                    <p>Complete home makeovers that reflect your personality and lifestyle. From living rooms to bedrooms, we create spaces you'll love coming home to.</p>
                </div>
                <div class="vmt-service-card-7p8w">
                    <div class="vmt-service-icon-9q2r">🏢</div>
                    <h3>Commercial Spaces</h3>
                    <p>Professional office and retail space design that enhances productivity and creates memorable customer experiences.</p>
                </div>
                <div class="vmt-service-card-7p8w">
                    <div class="vmt-service-icon-9q2r">📐</div>
                    <h3>Space Planning</h3>
                    <p>Optimize your space layout for maximum functionality and flow. Smart solutions for any size room or building.</p>
                </div>
                <div class="vmt-service-card-7p8w">
                    <div class="vmt-service-icon-9q2r">🎨</div>
                    <h3>Color Consultation</h3>
                    <p>Expert color schemes that create the perfect mood and atmosphere for your space. Professional guidance on paint, fabrics, and finishes.</p>
                </div>
                <div class="vmt-service-card-7p8w">
                    <div class="vmt-service-icon-9q2r">🪑</div>
                    <h3>Furniture Selection</h3>
                    <p>Curated furniture pieces that combine style, comfort, and functionality. We help you choose pieces that fit your space and budget.</p>
                </div>
                <div class="vmt-service-card-7p8w">
                    <div class="vmt-service-icon-9q2r">💡</div>
                    <h3>Lighting Design</h3>
                    <p>Strategic lighting solutions that enhance ambiance and functionality. From natural light optimization to fixture selection.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="vmt-about-section-6n4l">
        <div class="vmt-container-1x9p">
            <h2 class="vmt-section-title-4k7j">About VimoroToday</h2>
            <div class="vmt-about-content-8m7k">
                <div class="vmt-about-text-3p9j">
                    <p>At VimoroToday, we believe that great design has the power to transform not just spaces, but lives. Our team of experienced interior designers brings creativity, expertise, and passion to every project we undertake.</p>
                    
                    <p>Founded with the vision of making professional interior design accessible to everyone, we work closely with our clients to understand their unique needs, preferences, and lifestyle requirements. Whether you're looking to refresh a single room or completely redesign your entire home or office, we're here to guide you through every step of the process.</p>
                    
                    <p>Our approach combines timeless design principles with contemporary trends, ensuring that your space not only looks beautiful today but remains stylish for years to come. We pride ourselves on delivering exceptional results that exceed expectations while staying within budget and timeline constraints.</p>
                </div>
                <div class="vmt-about-image-2q5n">
                    <img src="https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg" alt="Interior Design Consultation">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="vmt-history-section-4r8m">
        <div class="vmt-container-1x9p">
            <h2 class="vmt-section-title-4k7j">Our Journey</h2>
            <div class="vmt-timeline-9k3p">
                <div class="vmt-timeline-item-7j2q">
                    <div class="vmt-timeline-year-5n8w">2018</div>
                    <h3>The Beginning</h3>
                    <p>VimoroToday was founded by a group of passionate interior designers who wanted to bring fresh perspectives to residential and commercial spaces. Starting with just three team members, we completed our first 25 projects in the inaugural year.</p>
                </div>
                <div class="vmt-timeline-item-7j2q">
                    <div class="vmt-timeline-year-5n8w">2019</div>
                    <h3>Expanding Horizons</h3>
                    <p>We expanded our services to include commercial space design and added specialized consultants for lighting and color theory. Our team grew to eight professionals, and we completed over 75 projects across residential and commercial sectors.</p>
                </div>
                <div class="vmt-timeline-item-7j2q">
                    <div class="vmt-timeline-year-5n8w">2020</div>
                    <h3>Digital Innovation</h3>
                    <p>Adapting to changing times, we introduced virtual consultations and 3D visualization services. This allowed us to continue serving clients safely while providing them with immersive design experiences from the comfort of their homes.</p>
                </div>
                <div class="vmt-timeline-item-7j2q">
                    <div class="vmt-timeline-year-5n8w">2021</div>
                    <h3>Recognition & Growth</h3>
                    <p>Our innovative approach earned recognition from industry publications, and we were featured in several design magazines. We expanded our team to 15 professionals and opened a second office to better serve our growing client base.</p>
                </div>
                <div class="vmt-timeline-item-7j2q">
                    <div class="vmt-timeline-year-5n8w">2022-2024</div>
                    <h3>Sustainable Design Focus</h3>
                    <p>We pioneered eco-friendly design solutions and sustainable material sourcing. Today, VimoroToday is known for creating beautiful spaces that are environmentally conscious, having completed over 300 projects with a focus on sustainability and client satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="vmt-expertise-section-4q7m">
        <div class="vmt-container-1x9p">
            <h2 class="vmt-section-title-4k7j">Areas of Expertise</h2>
            <div class="vmt-expertise-grid-6k3p">
                <div class="vmt-expertise-card-8n5q">
                    <h3>Modern Contemporary</h3>
                    <p>Clean lines, open spaces, and minimalist aesthetics that emphasize functionality and simplicity. We create contemporary spaces that feel fresh and uncluttered while maintaining warmth and comfort.</p>
                </div>
                <div class="vmt-expertise-card-8n5q">
                    <h3>Traditional Elegance</h3>
                    <p>Timeless designs that incorporate classic elements, rich textures, and sophisticated color palettes. Perfect for those who appreciate enduring style and refined aesthetics.</p>
                </div>
                <div class="vmt-expertise-card-8n5q">
                    <h3>Industrial Chic</h3>
                    <p>Raw materials, exposed elements, and urban aesthetics combined with comfortable furnishings. We balance industrial elements with cozy touches to create unique, livable spaces.</p>
                </div>
                <div class="vmt-expertise-card-8n5q">
                    <h3>Scandinavian Style</h3>
                    <p>Light, airy spaces with natural materials, neutral colors, and functional design. We bring the hygge concept to life through cozy, practical, and beautiful interiors.</p>
                </div>
                <div class="vmt-expertise-card-8n5q">
                    <h3>Eclectic Fusion</h3>
                    <p>Thoughtful mixing of styles, periods, and textures to create personalized spaces that tell your unique story. We expertly blend different elements for cohesive, interesting designs.</p>
                </div>
                <div class="vmt-expertise-card-8n5q">
                    <h3>Sustainable Design</h3>
                    <p>Environmentally conscious design choices using recycled materials, energy-efficient solutions, and locally sourced furnishings. Beautiful spaces that are kind to the planet.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="vmt-process-section-9j5q">
        <div class="vmt-container-1x9p">
            <h2 class="vmt-section-title-4k7j">Our Design Process</h2>
            <div class="vmt-process-steps-2m7k">
                <div class="vmt-process-step-6p3n">
                    <div class="vmt-step-number-8q4r">1</div>
                    <h3>Initial Consultation</h3>
                    <p>We start with a comprehensive discussion about your vision, needs, lifestyle, and budget. This helps us understand your unique requirements and preferences.</p>
                </div>
                <div class="vmt-process-step-6p3n">
                    <div class="vmt-step-number-8q4r">2</div>
                    <h3>Space Assessment</h3>
                    <p>Our team conducts a thorough evaluation of your space, taking measurements, noting architectural features, and identifying opportunities and challenges.</p>
                </div>
                <div class="vmt-process-step-6p3n">
                    <div class="vmt-step-number-8q4r">3</div>
                    <h3>Concept Development</h3>
                    <p>We create initial design concepts, mood boards, and layout options that align with your vision while maximizing the potential of your space.</p>
                </div>
                <div class="vmt-process-step-6p3n">
                    <div class="vmt-step-number-8q4r">4</div>
                    <h3>Design Refinement</h3>
                    <p>Working closely with you, we refine the chosen concept, select materials, colors, and furnishings, and create detailed plans for implementation.</p>
                </div>
                <div class="vmt-process-step-6p3n">
                    <div class="vmt-step-number-8q4r">5</div>
                    <h3>Implementation</h3>
                    <p>Our team coordinates all aspects of the project, from procurement to installation, ensuring everything is executed according to plan and timeline.</p>
                </div>
                <div class="vmt-process-step-6p3n">
                    <div class="vmt-step-number-8q4r">6</div>
                    <h3>Final Reveal</h3>
                    <p>We put the finishing touches on your space and present the completed project. Your satisfaction is our ultimate goal, and we ensure every detail meets your expectations.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="vmt-team-section-9p4k">
        <div class="vmt-container-1x9p">
            <h2 class="vmt-section-title-4k7j">Meet Our Team</h2>
            <div class="vmt-team-grid-2m7n">
                <div class="vmt-team-member-5q8p">
                    <div class="vmt-member-photo-7k2m">SM</div>
                    <h3>Sarah Mitchell</h3>
                    <p><strong>Lead Designer</strong></p>
                    <p>With over 12 years of experience, Sarah specializes in residential design and has a keen eye for color and texture combinations that create stunning, livable spaces.</p>
                </div>
                <div class="vmt-team-member-5q8p">
                    <div class="vmt-member-photo-7k2m">DJ</div>
                    <h3>David Johnson</h3>
                    <p><strong>Commercial Design Specialist</strong></p>
                    <p>David brings 10 years of commercial design expertise, focusing on creating functional and inspiring work environments that boost productivity and employee satisfaction.</p>
                </div>
                <div class="vmt-team-member-5q8p">
                    <div class="vmt-member-photo-7k2m">ER</div>
                    <h3>Emily Rodriguez</h3>
                    <p><strong>Sustainability Consultant</strong></p>
                    <p>Emily leads our eco-friendly design initiatives, ensuring that all projects incorporate sustainable materials and energy-efficient solutions without compromising on style.</p>
                </div>
                <div class="vmt-team-member-5q8p">
                    <div class="vmt-member-photo-7k2m">MC</div>
                    <h3>Michael Chen</h3>
                    <p><strong>Space Planning Expert</strong></p>
                    <p>Michael's background in architecture and interior design makes him our go-to expert for optimizing space layouts and creating functional floor plans for any project size.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="vmt-reviews-section-6m4k">
        <div class="vmt-container-1x9p">
            <h2 class="vmt-section-title-4k7j">What Our Clients Say</h2>
            <div class="vmt-reviews-grid-8p7l">
                <div class="vmt-review-card-3q9n">
                    <div class="vmt-review-stars-7k2m">★★★★★</div>
                    <p>"VimoroToday completely transformed our living room and kitchen. The team was professional, creative, and stayed within our budget. We couldn't be happier with the results!"</p>
                    <div class="vmt-review-author-4n8p">- Jennifer Thompson</div>
                </div>
                <div class="vmt-review-card-3q9n">
                    <div class="vmt-review-stars-7k2m">★★★★★</div>
                    <p>"Working with VimoroToday was an absolute pleasure. They listened to our needs and created a beautiful, functional office space that our employees love. Highly recommended!"</p>
                    <div class="vmt-review-author-4n8p">- Robert Martinez</div>
                </div>
                <div class="vmt-review-card-3q9n">
                    <div class="vmt-review-stars-7k2m">★★★★★</div>
                    <p>"The attention to detail and creativity shown by the VimoroToday team exceeded our expectations. Our home feels like a completely new space, and we love every corner of it."</p>
                    <div class="vmt-review-author-4n8p">- Lisa Anderson</div>
                </div>
                <div class="vmt-review-card-3q9n">
                    <div class="vmt-review-stars-7k2m">★★★★★</div>
                    <p>"From concept to completion, VimoroToday delivered exceptional service. Their sustainable design approach aligned perfectly with our values, and the final result is stunning."</p>
                    <div class="vmt-review-author-4n8p">- Mark Wilson</div>
                </div>
                <div class="vmt-review-card-3q9n">
                    <div class="vmt-review-stars-7k2m">★★★★★</div>
                    
                    <p>"The team at VimoroToday made our dream home a reality. Their expertise in space planning helped us maximize every square foot, and the color choices they recommended are absolutely perfect."</p>
                    <div class="vmt-review-author-4n8p">- Amanda Davis</div>
                </div>
                <div class="vmt-review-card-3q9n">
                    <div class="vmt-review-stars-7k2m">★★★★★</div>
                    <p>"Professional, reliable, and incredibly talented. VimoroToday redesigned our restaurant, and we've received countless compliments from customers about the beautiful atmosphere they created."</p>
                    <div class="vmt-review-author-4n8p">- Carlos Rodriguez</div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="vmt-services-section-2n6m">
        <div class="vmt-container-1x9p">
            <h2 class="vmt-section-title-4k7j">Get In Touch</h2>
            <div class="vmt-about-content-8m7k">
                <div class="vmt-about-text-3p9j">
                    <h3>Ready to Transform Your Space?</h3>
                    <p>Contact us today to schedule your consultation and take the first step toward creating the space of your dreams. Our team is ready to bring your vision to life with creativity, expertise, and attention to detail.</p>
                    
                    <p>We offer flexible consultation options including in-person visits, virtual meetings, and phone consultations to accommodate your schedule and preferences.</p>
                    
                    <p>Whether you're planning a complete renovation or just need some professional guidance on refreshing your current space, we're here to help make your interior design goals a reality.</p>
                </div>
                <div class="vmt-about-image-2q5n">
                    <img src="https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg" alt="Contact VimoroToday">
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="vmt-footer-7n2m">
        <div class="vmt-container-1x9p">
            <div class="vmt-footer-content-4k8p">
                <div class="vmt-footer-section-9m5q">
                    <h3 class="vmt-footer-title-3p7k">VimoroToday</h3>
                    <p>Professional interior design services that transform spaces and enhance lives. Creating beautiful, functional environments tailored to your unique style and needs.</p>
                </div>
                <div class="vmt-footer-section-9m5q">
                    <h3 class="vmt-footer-title-3p7k">Contact Information</h3>
                    <ul class="vmt-contact-info-6j4n">
                        <li><a href="tel:+15551234567">📞 (555) 123-4567</a></li>
                        <li>📧 info@vimorotoday.com</li>
                        <li>📍 1247 Design Boulevard, Suite 302</li>
                        <li>Creative District, NY 10001</li>
                    </ul>
                </div>
                <div class="vmt-footer-section-9m5q">
                    <h3 class="vmt-footer-title-3p7k">Business Hours</h3>
                    <ul class="vmt-contact-info-6j4n">
                        <li>Monday - Friday: 9:00 AM - 6:00 PM</li>
                        <li>Saturday: 10:00 AM - 4:00 PM</li>
                        <li>Sunday: By Appointment Only</li>
                        <li>Emergency Consultations Available</li>
                    </ul>
                </div>
                <div class="vmt-footer-section-9m5q">
                    <h3 class="vmt-footer-title-3p7k">Quick Links</h3>
                    <ul class="vmt-contact-info-6j4n">
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#process">Design Process</a></li>
                        <li><a href="#reviews">Client Reviews</a></li>
                        <li><a onclick="showModal('privacy')">Privacy Policy</a></li>
                        <li><a onclick="showModal('terms')">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="vmt-footer-bottom-8r3m">
                <p>© 2024 VimoroToday Interior Design Services. All rights reserved. | Professional interior design solutions for residential and commercial spaces.</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="vmt-modal-overlay-5k9p">
        <div class="vmt-modal-content-7m2q">
            <span class="vmt-modal-close-3n8k" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>VimoroToday collects information you provide directly to us, such as when you contact us for consultations, request quotes, or communicate with our team. This may include your name, email address, phone number, address, and project details.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide interior design services and consultations</li>
                <li>Communicate with you about your projects</li>
                <li>Send you updates about our services</li>
                <li>Improve our services and customer experience</li>
                <li>Comply with legal obligations</li>
            </ul>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted partners who assist us in operating our business, conducting our services, or serving you.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving marketing communications from us at any time.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@vimorotoday.com or (555) 123-4567.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="termsModal" class="vmt-modal-overlay-5k9p">
        <div class="vmt-modal-content-7m2q">
            <span class="vmt-modal-close-3n8k" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using VimoroToday's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Services Description</h3>
            <p>VimoroToday provides professional interior design services including but not limited to space planning, color consultation, furniture selection, lighting design, and complete interior makeovers for residential and commercial properties.</p>
            
            <h3>Client Responsibilities</h3>
            <p>Clients agree to:</p>
            <ul>
                <li>Provide accurate information about their needs and preferences</li>
                <li>Allow reasonable access to the property for consultations and work</li>
                <li>Make timely decisions on design proposals and material selections</li>
                <li>Communicate any concerns or changes promptly</li>
                <li>Ensure payment according to agreed terms</li>
            </ul>
            
            <h3>Project Timeline and Changes</h3>
            <p>Project timelines are estimates and may be affected by factors beyond our control. Changes to approved designs may result in additional costs and timeline adjustments.</p>
            
            <h3>Intellectual Property</h3>
            <p>All design concepts, plans, and materials created by VimoroToday remain our intellectual property until full payment is received. Clients receive usage rights for their specific project.</p>
            
            <h3>Limitation of Liability</h3>
            <p>VimoroToday's liability is limited to the amount paid for services. We are not responsible for indirect, incidental, or consequential damages.</p>
            
            <h3>Dispute Resolution</h3>
            <p>Any disputes will be resolved through mediation or arbitration in accordance with local laws.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at info@vimorotoday.com or (555) 123-4567.</p>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Modal functions
        function showModal(type) {
            const modal = document.getElementById(type + 'Modal');
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(type) {
            const modal = document.getElementById(type + 'Modal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        window.addEventListener('click', function(event) {
            if (event.target.classList.contains('vmt-modal-overlay-5k9p')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modals = document.querySelectorAll('.vmt-modal-overlay-5k9p');
                modals.forEach(modal => {
                    if (modal.style.display === 'block') {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });
            }
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.vmt-header-9x4k');
            if (window.scrollY > 100) {
                header.style.background = 'linear-gradient(135deg, rgba(44, 62, 80, 0.95), rgba(52, 73, 94, 0.95))';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'linear-gradient(135deg, #2c3e50, #34495e)';
                header.style.backdropFilter = 'none';
            }
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.vmt-service-card-7p8w, .vmt-expertise-card-8n5q, .vmt-team-member-5q8p, .vmt-review-card-3q9n, .vmt-timeline-item-7j2q');
            
            animateElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
</body>
</html>
