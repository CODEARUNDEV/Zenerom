<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caseStudies = [
            [
                'slug' => 'florkett-seo',
                'num' => '01',
                'title' => 'Florkett UAE: 412% Organic Revenue Growth & E-Commerce Scale',
                'category' => 'E-Commerce & SEO',
                'category_slug' => 'seo',
                'metric' => '+412% Revenue Surge',
                'image' => 'assets/images/industries/ecommerce.jpg',
                'secondary_image' => 'assets/images/cta-image-2.webp',
                'client' => 'Florkett UAE (Flooring & Interior Solutions)',
                'timeline' => '6 Months Execution',
                'industry' => 'Commercial Flooring & Luxury Interiors',
                'summary' => 'How Zenerom re-architected Florkett’s digital commerce ecosystem with structured category silos, technical crawl optimization, and high-intent commercial search dominance to drive +412% organic revenue in the UAE.',
                'challenge' => 'Florkett faced low organic visibility for commercial flooring keywords in Dubai, poor category page crawl efficiency, weak internal linking, and zero ranking for high-intent B2B contractor search terms. Inefficient URL parameters generated 4,000+ crawl redirect loops, draining Googlebot crawl budget.',
                'solution' => 'Executed a full-scale technical eCommerce SEO overhaul fixing redirect loops and canonical hierarchies. Engineered structured category silos for Vinyl, SPC, LVT, Sports Flooring, and WPC Decking. Implemented rich schema markup (Product, AggregateRating, BreadcrumbList) and produced authoritative technical buying guides.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Technical Crawl & Indexation Overhaul',
                        'desc' => 'Resolved 4,000+ redirect loops, eliminated faceted navigation duplicate content, and accelerated Core Web Vitals to sub-800ms Largest Contentful Paint across all mobile devices.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Category Silo Architecture',
                        'desc' => 'Restructured commercial flooring taxonomy into separate B2B procurement and luxury residential clusters, aligning URL structure with search intent.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Schema.org Graph Engineering',
                        'desc' => 'Embedded rich JSON-LD Product, Offer, MerchantReturnPolicy, and Organization graphs enabling instant star ratings and pricing badges in Google SERPs.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'B2B Contractor Authority Clusters',
                        'desc' => 'Published 30+ technical comparison sheets, fire-safety compliance guides, and Dubai Municipality material compliance specs to capture enterprise RFP queries.'
                    ]
                ],
                'deliverables' => ['Shopify Plus Architecture', 'Technical SEO & Crawl Optimization', 'Schema.org Graph Engineering', 'Ahrefs Enterprise Auditing', 'Looker Studio Executive Dashboards'],
                'results' => [
                    ['num' => '+412%', 'lbl' => 'Organic Revenue Surge'],
                    ['num' => 'Top 3', 'lbl' => 'Flooring Keywords in UAE'],
                    ['num' => '3.8x', 'lbl' => 'Inbound B2B Deal Pipeline']
                ],
                'testimonial' => [
                    'quote' => 'Zenerom transformed our online platform from a dormant catalog into our primary revenue generator across Dubai and Abu Dhabi. Our B2B inquiries have quadrupled.',
                    'author' => 'Tariq Al-Mansoor',
                    'role' => 'Managing Director, Florkett UAE'
                ],
                'meta_title' => 'Florkett UAE Case Study | 412% Organic Revenue Growth | Zenerom',
                'meta_description' => 'Discover how Zenerom achieved a 412% organic revenue surge and Top 3 Google UAE rankings for Florkett through technical eCommerce SEO and category silo architecture.',
                'sort_order' => 1,
            ],
            [
                'slug' => 'laliga-ads',
                'num' => '02',
                'title' => 'LaLiga Academy: 934 Student Registrations at AED 44 CPL',
                'category' => 'Education & Paid Ads',
                'category_slug' => 'performance-ads',
                'metric' => '934 Enrolments @ AED 44 CPL',
                'image' => 'assets/images/industries/education.jpg',
                'secondary_image' => 'assets/images/cta-image-6.webp',
                'client' => 'LaLiga Academy UAE',
                'timeline' => '90-Day Registration Sprint',
                'industry' => 'Youth Sports Education & Athletics',
                'summary' => 'Scaling student registrations across Dubai and Abu Dhabi through localized Performance Max campaigns, hyper-targeted negative search filtering, and frictionless WhatsApp enrollment funnels.',
                'challenge' => 'High cost-per-lead and wasted spend on broad generic sports keywords during competitive back-to-school registration windows across Dubai and Abu Dhabi. Inquiries suffered from drop-off due to multi-step desktop form friction.',
                'solution' => 'Rebuilt Google Search campaigns with strict negative keyword filtering and exact-match parent intent. Deployed localized Performance Max asset groups targeting premium residential communities. Built lightning-fast mobile enrollment landing funnels with direct WhatsApp integration.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Intent Filtering & Negative Keyword Scrub',
                        'desc' => 'Audited historical ad logs to eliminate 60%+ wasted budget on casual video gaming and broadcast terms, isolating high-intent parent academy search queries.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Hyper-Local Performance Max Assets',
                        'desc' => 'Segmented creative assets by facility location across Arabian Ranches, Dubai Sports City, and Abu Dhabi, matching localized campus visuals with relevant audiences.'
                    ],
                    [
                        'step' => '03',
                        'title' => '1-Click WhatsApp Enrollment Funnel',
                        'desc' => 'Designed lightweight mobile funnels allowing parents to start a direct consultation with registrar staff in under 15 seconds, lifting conversions by 31%.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'CRM Closed-Loop Attribution',
                        'desc' => 'Linked Google Click Identifiers with Zoho CRM to feed validated paid student registrations back into smart bidding routines, optimizing ROAS automatically.'
                    ]
                ],
                'deliverables' => ['Google Ads Search & PMax', 'High-Conversion Mobile Funnels', 'WhatsApp Cloud API Integration', 'Zoho CRM Closed-Loop Sync', 'Looker Studio Real-Time Reporting'],
                'results' => [
                    ['num' => '934', 'lbl' => 'Verified Student Registrations'],
                    ['num' => 'AED 44', 'lbl' => 'Average Cost Per Lead'],
                    ['num' => '31%', 'lbl' => 'Landing Page Conversion Lift']
                ],
                'testimonial' => [
                    'quote' => 'Zenerom shattered our historical registration goals. Reaching 934 students at AED 44 CPL during peak enrollment season was a phenomenal success.',
                    'author' => 'Carlos Hernandez',
                    'role' => 'Head of Marketing & Operations, LaLiga Academy UAE'
                ],
                'meta_title' => 'LaLiga Academy Case Study | 934 Enrollments @ AED 44 CPL | Zenerom',
                'meta_description' => 'See how Zenerom generated 934 paid student registrations at an industry-low AED 44 CPL for LaLiga Academy UAE using Google Ads and WhatsApp conversion funnels.',
                'sort_order' => 2,
            ],
            [
                'slug' => 'dubai-renovation',
                'num' => '03',
                'title' => 'Dubai Renovation: 531 High-Ticket Villa Remodeling Leads',
                'category' => 'Interior Design & Meta Ads',
                'category_slug' => 'performance-ads',
                'metric' => '531 Leads • AED 1.8M Value',
                'image' => 'assets/images/industries/real-estate.jpg',
                'secondary_image' => 'assets/images/cta-image-1.webp',
                'client' => 'RFS Remodeling Group Dubai',
                'timeline' => '4 Months Campaign',
                'industry' => 'Luxury Villa Interiors & Fit-Out',
                'summary' => 'Deploying cinematic short-form video campaigns, freehold community geo-fencing, and an interactive budget qualifying estimator to capture AED 1.8M in remodeling contract opportunities.',
                'challenge' => 'Villa remodeling contracts in Dubai are high-ticket (AED 100k - 500k+). Conventional social media ads generated low-intent inquiries from tenants and budget decorators rather than qualifying luxury property owners in freehold developments.',
                'solution' => 'Created cinematic before-and-after video reels showcasing Palm Jumeirah and Dubai Hills villa renovations. Configured hyper-targeted geo-fencing for freehold luxury communities in Dubai. Designed an interactive multi-step renovation scope estimator qualifying budget before submission.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Luxury Asset Video Production',
                        'desc' => 'Shot cinematic 4K walkthrough reels of completed villa transformations in Palm Jumeirah, Emirates Hills, and Dubai Hills Estate to build immediate aesthetic credibility.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Micro-Targeted Geo-Fencing',
                        'desc' => 'Constrained ad delivery strictly to high-wealth villa master communities, excluding rental apartment districts to minimize unqualified inquiry waste.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Interactive Scope & Budget Estimator',
                        'desc' => 'Replaced generic lead forms with an interactive 4-step remodeling cost calculator that required homeowners to specify villa typology and verified budgets.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Automated Instant Dispatch',
                        'desc' => 'Engineered instant WhatsApp notifications dispatching qualified homeowner leads directly to senior interior architects within 120 seconds of submission.'
                    ]
                ],
                'deliverables' => ['Meta Ads (Instagram & FB)', 'Cinematic Video Production', 'Interactive Funnel Architecture', 'WhatsApp Cloud API', 'Lead Scoring Engine'],
                'results' => [
                    ['num' => '531', 'lbl' => 'Qualified Meta Inquiries'],
                    ['num' => 'AED 1.8M', 'lbl' => 'Contract Pipeline Value'],
                    ['num' => '14.2%', 'lbl' => 'Lead-to-Survey Rate']
                ],
                'testimonial' => [
                    'quote' => 'Zenerom delivered real, high-budget villa owners ready to sign. The interactive estimator eliminated tire-kickers and packed our design calendar.',
                    'author' => 'Rashid Farooq',
                    'role' => 'Managing Director, RFS Remodeling Group'
                ],
                'meta_title' => 'Dubai Renovation Case Study | 531 Villa Leads • AED 1.8M Value | Zenerom',
                'meta_description' => 'Explore how Zenerom captured 531 qualified villa renovation inquiries and an AED 1.8M pipeline for RFS Remodeling using Meta Ads and an interactive scope calculator.',
                'sort_order' => 3,
            ],
            [
                'slug' => 'dewa-approvals',
                'num' => '04',
                'title' => 'DEWA Approvals: +298% More Qualified Commercial Inquiries',
                'category' => 'Engineering & SEO',
                'category_slug' => 'seo',
                'metric' => '+298% Commercial Inquiries',
                'image' => 'assets/images/work-image-7.webp',
                'secondary_image' => 'assets/images/cta-image-3.webp',
                'client' => 'DEWA Approvals UAE (MEP Consultants)',
                'timeline' => '90-Day Authority Sprint',
                'industry' => 'MEP Engineering & Governmental Approvals',
                'summary' => 'Positioning an MEP consulting firm as the authoritative #1 authority for Dubai Electricity and Water Authority technical submissions, capturing high-value commercial warehouse and building approvals.',
                'challenge' => 'High competition from legacy MEP consultants and a lack of clear, structured guidance answering technical queries regarding governmental electricity and water authority submissions in Dubai.',
                'solution' => 'Architected topical authority content clusters covering substation approvals, load enhancements, and NOC filings. Optimized Core Web Vitals to sub-second load times on mobile devices for on-site engineers.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Topical Map & Entity Optimization',
                        'desc' => 'Created exhaustive semantic content hubs covering DEWA Fit-out NOC, Transformer Room design, Low Voltage distribution, and Solar PV connection regulations.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Technical Speed & Accessibility',
                        'desc' => 'Optimized Core Web Vitals to sub-second mobile load speeds, ensuring field engineers and project managers on construction sites could easily access data.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Local Trust & Entity Schema',
                        'desc' => 'Implemented ProfessionalService schema, linking engineering licensing credentials and Dubai municipal accreditations for maximum E-E-A-T signals.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Document Checklist Download Funnel',
                        'desc' => 'Built downloadable submission checklist lead magnets capturing contractor contact details before formal project tenders.'
                    ]
                ],
                'deliverables' => ['Technical SEO', 'Entity Optimization', 'Core Web Vitals Engineering', 'B2B Lead Funnels', 'Content Silo Strategy'],
                'results' => [
                    ['num' => '+298%', 'lbl' => 'Commercial Inquiries Lift'],
                    ['num' => '#1 Rank', 'lbl' => 'for DEWA Electrical Approval'],
                    ['num' => '< 90 Days', 'lbl' => 'Ranking Velocity']
                ],
                'testimonial' => [
                    'quote' => 'We now receive weekly commercial tender invitations solely through our Google rankings. Zenerom’s understanding of technical B2B SEO is unmatched.',
                    'author' => 'Eng. Sameer Qureshi',
                    'role' => 'Principal Partner, DEWA Approvals UAE'
                ],
                'meta_title' => 'DEWA Approvals Case Study | +298% Inquiries | Zenerom SEO',
                'meta_description' => 'Learn how Zenerom achieved #1 rankings on Google UAE for DEWA Electrical Approvals and lifted commercial inquiries by +298% within 90 days.',
                'sort_order' => 4,
            ],
            [
                'slug' => 'statron-industrial',
                'num' => '05',
                'title' => 'Statron Middle East: High-Capacity Industrial Web Platform',
                'category' => 'Industrial & Web Dev',
                'category_slug' => 'web-dev',
                'metric' => 'Sub-second TTFB • +195% RFQs',
                'image' => 'assets/images/industries/logistics.jpg',
                'secondary_image' => 'assets/images/cta-image-5.webp',
                'client' => 'Statron Middle East (Swiss Industrial Power)',
                'timeline' => '3 Months Engineering',
                'industry' => 'Industrial Power Systems & UPS Engineering',
                'summary' => 'Transforming a legacy industrial manufacturer catalog into a lighting-fast, responsive web application with parametric specification filtering and rapid RFP generation for EPC contractors.',
                'challenge' => 'A legacy corporate site with fragmented technical specifications, poor mobile responsiveness, and sluggish catalog downloads preventing EPC contractors from submitting tender RFQs.',
                'solution' => 'Engineered custom, high-speed industrial website architecture with clean technical datasheets. Designed intuitive parametric product filters for UPS systems, industrial rectifiers, and inverters.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Component-Driven Architecture',
                        'desc' => 'Engineered modular Vanilla CSS and lightweight JavaScript components achieving a sub-100ms Time-To-First-Byte on regional Middle Eastern edge servers.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Parametric Technical Filtering',
                        'desc' => 'Created an instant specification filter allowing procurement engineers to filter industrial UPS and rectifiers by kVA rating, voltage, and IP certification.'
                    ],
                    [
                        'step' => '03',
                        'title' => '1-Click Datasheet Generation',
                        'desc' => 'Streamlined PDF technical document downloads, eliminating multi-page friction and automatically logging engineer contact details for follow-up.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Regional Multi-Currency RFP Builder',
                        'desc' => 'Integrated a custom RFQ cart enabling tender officers to bundle complex industrial equipment into structured requests sent to local technical sales teams.'
                    ]
                ],
                'deliverables' => ['Custom Web Engineering', 'HTML5/Vanilla CSS Architecture', 'Parametric Product Grid', 'Fast Edge CDN', 'Automated RFQ Routing'],
                'results' => [
                    ['num' => 'Sub-second', 'lbl' => 'Global TTFB Speed'],
                    ['num' => '100%', 'lbl' => 'Mobile & Tablet UX Score'],
                    ['num' => '+195%', 'lbl' => 'B2B RFQ Submissions']
                ],
                'testimonial' => [
                    'quote' => 'Our EPC clients across the GCC praise the speed and clarity of our new platform. RFP submissions surged immediately following launch.',
                    'author' => 'Markus Weber',
                    'role' => 'Regional Commercial Director, Statron Middle East'
                ],
                'meta_title' => 'Statron Middle East Case Study | Industrial Web Platform | Zenerom',
                'meta_description' => 'Discover how Zenerom built a high-speed industrial web platform for Statron Middle East, boosting B2B tender RFQ submissions by +195%.',
                'sort_order' => 5,
            ],
            [
                'slug' => 'farm-city',
                'num' => '06',
                'title' => 'Farm City Dubai: Hospitality Web Experience & Table Bookings',
                'category' => 'Hospitality & Web Design',
                'category_slug' => 'web-dev',
                'metric' => '+340% Table Reservations',
                'image' => 'assets/images/industries/hospitality.jpg',
                'secondary_image' => 'assets/images/cta-image-7.webp',
                'client' => 'Farm City Dubai Restaurant',
                'timeline' => '60-Day Sprint',
                'industry' => 'Hospitality, Dining & Culinary Concepts',
                'summary' => 'Designing an appetite-driven, modern hospitality web experience with seamless direct table reservations that bypassed third-party aggregator commissions.',
                'challenge' => 'Low visibility among Dubai diners and heavy reliance on food aggregators charging steep 25-30% commissions on deliveries and reservations with zero brand loyalty retention.',
                'solution' => 'Crafted an appetite-driven, modern restaurant web experience featuring immersive culinary imagery. Engineered frictionless online table reservation system eliminating commission fees.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Sensory Visual UI/UX',
                        'desc' => 'Built an immersive, dark-aesthetic visual interface showcasing high-definition artisanal culinary imagery and interactive seasonal dish galleries.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Direct Table Booking Engine',
                        'desc' => 'Integrated a custom booking system with real-time table availability, instant SMS/WhatsApp confirmations, and VIP celebration notes.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Local Google Maps Pack Optimization',
                        'desc' => 'Executed local SEO strategies targeting culinary keywords in Downtown Dubai, Business Bay, and DIFC, securing Top 3 Local 3-Pack placement.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Automated Review Capture Engine',
                        'desc' => 'Implemented post-dining automated review invitations, pushing Google review ratings to 4.8 stars with over 1,200 verified guest reviews.'
                    ]
                ],
                'deliverables' => ['Hospitality Web Experience', 'Table Booking Engine', 'Local SEO & Google Maps Dominance', 'Micro-Interactions', 'SMS/WhatsApp Automations'],
                'results' => [
                    ['num' => '+340%', 'lbl' => 'Online Table Reservations'],
                    ['num' => '4.8★', 'lbl' => 'Google Maps Authority'],
                    ['num' => '12,000+', 'lbl' => 'Monthly Menu Views']
                ],
                'testimonial' => [
                    'quote' => 'Our direct reservations jumped 340% without paying hefty commissions to third-party portals. The website reflects our dining standard perfectly.',
                    'author' => 'Chef Antoine Laurent',
                    'role' => 'Executive Chef & General Manager, Farm City Dubai'
                ],
                'meta_title' => 'Farm City Dubai Case Study | +340% Bookings | Zenerom Web Design',
                'meta_description' => 'How Zenerom engineered an appetite-driven hospitality experience for Farm City Dubai, lifting direct bookings by +340% and cutting aggregator fees.',
                'sort_order' => 6,
            ],
            [
                'slug' => 'spearhead-training',
                'num' => '07',
                'title' => 'Spearhead Training: Corporate Course Portal & Enrollments',
                'category' => 'Education & Portals',
                'category_slug' => 'corporate',
                'metric' => '200+ Courses • +185% RFPs',
                'image' => 'assets/images/work-image-2.webp',
                'secondary_image' => 'assets/images/cta-image-8.webp',
                'client' => 'Spearhead Training Gulf',
                'timeline' => '4 Months Overhaul',
                'industry' => 'Corporate Training & Executive Development',
                'summary' => 'Re-architecting an enterprise course taxonomy across 200+ executive modules with dynamic training calendars and enterprise RFP synchronization for Fortune 500 corporate clients.',
                'challenge' => 'Managing over 200 corporate training courses across Dubai and Abu Dhabi on a clunky legacy system caused high bounce rates among HR and L&D corporate directors.',
                'solution' => 'Re-engineered full course taxonomy categorized by Leadership, Sales, HR, and Executive Skills. Built dynamic course calendar with live dates, downloadable syllabi, and group booking discounts.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Course Taxonomy Restructure',
                        'desc' => 'Organized 200+ executive modules into intuitive tracks: Leadership & Management, HR & Training, Sales Mastery, and Business Communication.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Dynamic Live Training Calendar',
                        'desc' => 'Built an interactive calendar showing upcoming face-to-face Dubai cohorts and virtual sessions with seat availability counters.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Corporate Quotation Generator',
                        'desc' => 'Empowered HR directors to configure customized in-company group training programs and receive automated PDF fee estimates.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Enterprise CRM Integration',
                        'desc' => 'Linked website course inquiries directly with internal sales routing, notifying executive account managers in real-time.'
                    ]
                ],
                'deliverables' => ['Custom Portal Architecture', 'Course Database Management', 'B2B Corporate SEO', 'Enterprise CRM Sync', 'Interactive Training Calendar'],
                'results' => [
                    ['num' => '200+', 'lbl' => 'Interactive Course Modules'],
                    ['num' => '+185%', 'lbl' => 'Corporate RFP Inquiries'],
                    ['num' => 'Zero Latency', 'lbl' => 'Dynamic Schedule Sync']
                ],
                'testimonial' => [
                    'quote' => 'Our executive clients needed speed and clarity when approving training budgets. Zenerom’s portal delivered the modern enterprise standard we required.',
                    'author' => 'Victoria Bennett',
                    'role' => 'Managing Director, Spearhead Training Gulf'
                ],
                'meta_title' => 'Spearhead Training Case Study | Corporate Course Portal | Zenerom',
                'meta_description' => 'Explore how Zenerom restructured Spearhead Training Gulf’s 200+ course portal, elevating enterprise training RFP inquiries by +185%.',
                'sort_order' => 7,
            ],
            [
                'slug' => 'honest-healthcare',
                'num' => '08',
                'title' => 'Honest Home Health Care: Patient Portal & Care Bookings',
                'category' => 'Healthcare & Portals',
                'category_slug' => 'corporate',
                'metric' => '100% DHA Compliance • +280%',
                'image' => 'assets/images/industries/healthcare.jpg',
                'secondary_image' => 'assets/images/cta-image-9.webp',
                'client' => 'Honest Home Health Care Dubai',
                'timeline' => '75-Day Delivery',
                'industry' => 'Healthcare, Home Nursing & Rehabilitation',
                'summary' => 'Engineering a patient intake platform with strict Dubai Health Authority regulatory compliance, multi-lingual intake workflows, and rapid 24/7 emergency nursing triage.',
                'challenge' => 'Patients and families requiring urgent home nursing and elderly care in Dubai faced confusing booking steps and lacked clear information on DHA credentials and nurse qualifications.',
                'solution' => 'Built clean, empathetic healthcare website with strict DHA compliance and verified credentials. Engineered multi-language patient intake flows for elderly care, post-operative support, and physiotherapy.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'DHA Compliance & Credential Verification',
                        'desc' => 'Designed trust-building healthcare UI explicitly highlighting DHA licensed nursing staff, medical malpractice coverage, and clinical protocols.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Accessible Multi-Lingual Patient Intake',
                        'desc' => 'Created English and Arabic multi-step intake funnels tailored for elderly patients and families arranging home rehabilitation.'
                    ],
                    [
                        'step' => '03',
                        'title' => '24/7 Emergency Triage Integration',
                        'desc' => 'Implemented instant priority WhatsApp and direct call buttons routing urgent post-operative and palliative care inquiries immediately.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Hyper-Local Community SEO',
                        'desc' => 'Optimized localized healthcare keywords across Jumeirah, Emirates Hills, and Downtown Dubai, capturing families seeking trusted local caregivers.'
                    ]
                ],
                'deliverables' => ['Healthcare UX Design', 'DHA Regulatory Compliance', 'Local Maps SEO', 'WhatsApp Cloud Triage Desk', 'Accessible Arabic/English Layout'],
                'results' => [
                    ['num' => '100%', 'lbl' => 'DHA Regulatory Compliance'],
                    ['num' => '+280%', 'lbl' => 'Home Care Inquiries Lift'],
                    ['num' => '< 2 Mins', 'lbl' => 'Average Booking Response Time']
                ],
                'testimonial' => [
                    'quote' => 'Healthcare in Dubai demands total trust. Zenerom built a platform that reassures families and streamlines patient care intake effortlessly.',
                    'author' => 'Dr. Layla Al-Nuaimi',
                    'role' => 'Clinical Director, Honest Home Health Care'
                ],
                'meta_title' => 'Honest Home Health Care Case Study | DHA Compliant Portal | Zenerom',
                'meta_description' => 'See how Zenerom developed a DHA-compliant patient care portal for Honest Home Health Care, driving a +280% lift in verified home care inquiries.',
                'sort_order' => 8,
            ],
            [
                'slug' => 'genyard-energy',
                'num' => '09',
                'title' => 'Genyard Energy: Power Generator Showcase & B2B Inquiries',
                'category' => 'Energy & Industrial',
                'category_slug' => 'industrial',
                'metric' => '+220% Quoting Inquiries',
                'image' => 'assets/images/work-image-8.webp',
                'secondary_image' => 'assets/images/cta-image-1.webp',
                'client' => 'Genyard Energy Systems',
                'timeline' => '90-Day Sprint',
                'industry' => 'Commercial Power Systems & Industrial Energy',
                'summary' => 'Digitizing heavy industrial diesel and gas generators into an interactive parametric catalog, generating +220% more commercial equipment rental and sale quotes.',
                'challenge' => 'Industrial power generators require extensive engineering specifications (kVA ratings, fuel consumption, emissions) that were buried in unsearchable PDFs, leading to high bounce rates among site engineers.',
                'solution' => 'Constructed comprehensive interactive generator catalog with parametric kVA filters. Developed 1-click technical specification sheet generator for site engineers and contractors.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Parametric kVA Power Filter',
                        'desc' => 'Allowed project contractors to filter commercial generator inventory instantly by prime rating (10 kVA to 2500 kVA), soundproof canopy, and engine brand.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Automated Spec Sheet Exporter',
                        'desc' => 'Engineered a dynamic technical sheet preview allowing engineers to review electrical schematics and fuel specs directly in-browser.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Industrial Freezone SEO Campaign',
                        'desc' => 'Targeted high-value commercial keywords across JAFZA, Dubai Industrial City, and KIZAD, attracting plant managers and EPC contractors.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Rapid Dispatch Quoting Desk',
                        'desc' => 'Built an interactive quote configurator connecting site managers with equipment rental dispatchers within minutes.'
                    ]
                ],
                'deliverables' => ['Industrial Product Catalog', 'Parametric kVA Search', 'Dynamic Specification Generator', 'B2B Freezone SEO', 'Rental Quote Builder'],
                'results' => [
                    ['num' => '+220%', 'lbl' => 'Industrial Quoting Inquiries'],
                    ['num' => '45+ Units', 'lbl' => 'Commercial Power Systems Cataloged'],
                    ['num' => '#1 Tier', 'lbl' => 'Generator Rentals Search in UAE']
                ],
                'testimonial' => [
                    'quote' => 'Contractors need answers in seconds on job sites. Zenerom’s catalog gives them the exact data they need and brings qualified tenders straight to our sales desk.',
                    'author' => 'Hassan Al-Zahabi',
                    'role' => 'Sales Director, Genyard Energy Systems'
                ],
                'meta_title' => 'Genyard Energy Case Study | +220% Equipment Inquiries | Zenerom',
                'meta_description' => 'Discover how Zenerom digitized Genyard Energy’s industrial generator catalog, resulting in a +220% surge in commercial quoting inquiries.',
                'sort_order' => 9,
            ],
            [
                'slug' => 'mai-events',
                'num' => '10',
                'title' => 'MAI Events Dubai: High-Impact VIP Corporate Event Portfolio',
                'category' => 'Events & Luxury',
                'category_slug' => 'corporate',
                'metric' => '3.5x High-Ticket RFPs',
                'image' => 'assets/images/work-image-4.webp',
                'secondary_image' => 'assets/images/cta-image-3.webp',
                'client' => 'MAI Events Dubai',
                'timeline' => '60 Days Bespoke Design',
                'industry' => 'Luxury Events & VIP Brand Experiences',
                'summary' => 'Crafting a bespoke editorial portfolio with smooth GSAP animations and confidential RFP handling to capture multi-million dirham corporate and VIP event contracts.',
                'challenge' => 'A premier event management company in Dubai needed a luxury digital portfolio that matched the grandeur and sophistication of their multi-million dirham corporate and VIP events.',
                'solution' => 'Designed bespoke editorial portfolio featuring cinematic event imagery and fluid transitions. Built interactive event concept visualizer for luxury weddings, corporate galas, and brand launches.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Editorial Haute-Couture UI/UX',
                        'desc' => 'Designed a minimalist luxury aesthetic with refined typography, high-impact white space, and cinematic full-screen gallery transitions.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'GSAP Micro-Interactions',
                        'desc' => 'Implemented buttery-smooth scroll physics and parallax image reveals giving visitors a tactile, world-class agency feel.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Confidential VIP Proposal Desk',
                        'desc' => 'Engineered encrypted inquiry channels with NDA upload capabilities tailored for sovereign entities, royal weddings, and luxury global brands.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Luxury Event SEO Targeting',
                        'desc' => 'Captured high-ticket event production queries across the UAE and GCC, establishing brand presence among international event planners.'
                    ]
                ],
                'deliverables' => ['Luxury Editorial UI/UX', 'GSAP Smooth Motion Engine', 'Responsive High-Res Gallery', 'VIP Lead Intake Funnel', 'High-Ticket Event SEO'],
                'results' => [
                    ['num' => '3.5x', 'lbl' => 'High-Ticket RFP Growth'],
                    ['num' => '60+ VIP', 'lbl' => 'Published Case Galleries'],
                    ['num' => '98%', 'lbl' => 'Client Delight Score']
                ],
                'testimonial' => [
                    'quote' => 'Our clients include international luxury houses and royal families. Zenerom built a digital presence that perfectly honors the calibre of our productions.',
                    'author' => 'Mai Al-Ketbi',
                    'role' => 'Founder & Creative Director, MAI Events Dubai'
                ],
                'meta_title' => 'MAI Events Dubai Case Study | 3.5x High-Ticket RFPs | Zenerom',
                'meta_description' => 'Explore how Zenerom designed a bespoke luxury portfolio for MAI Events Dubai, driving a 3.5x increase in high-ticket corporate and VIP event proposals.',
                'sort_order' => 10,
            ],
            [
                'slug' => 'corp-creators',
                'num' => '11',
                'title' => 'Corp Creators: Mainland & Freezone Licensing Platform',
                'category' => 'Corporate Services',
                'category_slug' => 'corporate',
                'metric' => '+310% Setup Inquiries',
                'image' => 'assets/images/industries/corporate.jpg',
                'secondary_image' => 'assets/images/work-image-4.webp',
                'client' => 'Corp Creators Dubai',
                'timeline' => '90 Days Growth Architecture',
                'industry' => 'Business Setup, Corporate Licensing & Legal Advisory',
                'summary' => 'Disrupting the crowded Dubai business setup market with an interactive Freezone and Mainland fee calculator, authoritative investor knowledge hubs, and instant advisor triage.',
                'challenge' => 'Dubai business setup is flooded with generic agencies. Corp Creators needed an authoritative platform that built instant trust with foreign investors and enterprise founders.',
                'solution' => 'Engineered interactive Dubai License Cost Calculator estimating fees across 30+ Freezones and Mainland. Published in-depth investor guides on corporate tax compliance, Golden Visas, and banking setup.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Interactive Business Setup Cost Calculator',
                        'desc' => 'Developed an instant online calculator factoring in visa quotas, activity types, and jurisdiction (DMCC, IFZA, Meydan, Mainland DED).'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Investor Legal & Tax Knowledge Silos',
                        'desc' => 'Published comprehensive guides on 9% UAE Corporate Tax, Golden Visa eligibility, and corporate bank account opening procedures.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Commercial Intent Search Dominance',
                        'desc' => 'Targeted high-intent incorporation queries from UK, European, and Indian investors looking to establish UAE corporate operations.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Instant WhatsApp Legal Desk',
                        'desc' => 'Routed completed cost estimates directly to senior corporate advisors with pre-filled consultation details for instant follow-up.'
                    ]
                ],
                'deliverables' => ['Interactive Cost Calculator', 'Corporate Formation SEO', 'High-Converting B2B Funnels', 'WhatsApp Cloud Desk', 'Investor Resource Library'],
                'results' => [
                    ['num' => '+310%', 'lbl' => 'Business Setup Inquiries'],
                    ['num' => '-45%', 'lbl' => 'Customer Acquisition Cost'],
                    ['num' => '24/7', 'lbl' => 'Cost Calculator Inbound Leads']
                ],
                'testimonial' => [
                    'quote' => 'The calculator and content hubs built instant authority. Foreign investors arrive educated and ready to initiate their trade licenses.',
                    'author' => 'Alexander Wright',
                    'role' => 'Managing Partner, Corp Creators Dubai'
                ],
                'meta_title' => 'Corp Creators Case Study | +310% Setup Inquiries | Zenerom',
                'meta_description' => 'How Zenerom engineered an interactive Dubai business setup calculator and SEO platform for Corp Creators, increasing qualified inquiries by +310%.',
                'sort_order' => 11,
            ],
            [
                'slug' => 'voltronix-seo',
                'num' => '12',
                'title' => 'Voltronix UAE: Commercial B2B SEO & Contractor Lead Engine',
                'category' => 'Manufacturing & SEO',
                'category_slug' => 'seo',
                'metric' => '+275% Organic B2B Leads',
                'image' => 'assets/images/work-image-5.webp',
                'secondary_image' => 'assets/images/cta-image-2.webp',
                'client' => 'Voltronix UAE (Electrical & Switchgear Solutions)',
                'timeline' => '6 Months Program',
                'industry' => 'Electrical Switchgear & Industrial Manufacturing',
                'summary' => 'Achieving Page 1 dominance on Google UAE for competitive industrial switchgear, transformers, and distribution panel procurement terms, securing AED 3.2M in tender value.',
                'challenge' => 'Competing against multinational electrical manufacturers without a massive ad budget. The brand needed durable organic Page 1 rankings to capture contractor procurement orders.',
                'solution' => 'Mapped engineering procurement terms for electrical switchgear, transformers, and distribution panels. Remediated site architecture, implementing schema graphs for industrial products.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Engineering Intent Keyword Architecture',
                        'desc' => 'Researched technical MEP contractor terms including MDB panels, Capacitor Banks, Motor Control Centers, and DEWA-approved switchgear.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Technical Architecture & Schema',
                        'desc' => 'Implemented comprehensive Organization, Product, and TechnicalArticle schema tags highlighting IEC compliance and testing certifications.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'High-Authority GCC Engineering Citations',
                        'desc' => 'Earned references and backlinks from reputable Middle Eastern construction directories and engineering publication portals.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Technical Specification RFP Funnel',
                        'desc' => 'Embedded 1-click CAD drawing and datasheet request forms directly on engineering spec pages, maximizing lead capture.'
                    ]
                ],
                'deliverables' => ['Enterprise Technical SEO', 'Industrial Entity Knowledge Graphs', 'Looker Studio Reporting', 'B2B Tender Funnels', 'Content Engineering'],
                'results' => [
                    ['num' => '+275%', 'lbl' => 'Organic B2B Inquiries'],
                    ['num' => '52 Keywords', 'lbl' => 'Top 3 on Google UAE'],
                    ['num' => 'AED 3.2M', 'lbl' => 'Attributed Tender Volume']
                ],
                'testimonial' => [
                    'quote' => 'We outranked global manufacturing giants for crucial commercial switchgear keywords in Dubai. The ROI from Zenerom has been immense.',
                    'author' => 'Praveen Nair',
                    'role' => 'General Manager, Voltronix UAE'
                ],
                'meta_title' => 'Voltronix UAE Case Study | +275% B2B Leads | Zenerom SEO',
                'meta_description' => 'Discover how Zenerom positioned Voltronix UAE in the Top 3 of Google for 52 industrial electrical keywords, driving +275% more contractor leads.',
                'sort_order' => 12,
            ],
            [
                'slug' => 'tourzone-travel',
                'num' => '13',
                'title' => 'Tourzone Travel: Digital Platform & Seamless Booking Flow',
                'category' => 'Travel & Web Platform',
                'category_slug' => 'e-commerce',
                'metric' => '+380% Bookings • 1.2s TTFB',
                'image' => 'assets/images/work-image-1.webp',
                'secondary_image' => 'assets/images/cta-image-5.webp',
                'client' => 'Tourzone UAE',
                'timeline' => '90-Day Sprint',
                'industry' => 'Tourism, Desert Safaris & Luxury Travel Experiences',
                'summary' => 'Engineering a mobile-first tour booking experience with sub-second page performance, multi-currency Apple Pay checkout, and automated WhatsApp ticketing.',
                'challenge' => 'International tourists and GCC weekenders struggled with complex checkout flows on standard travel portals, resulting in over 70% cart abandonment on desert safaris and Dubai city tours.',
                'solution' => 'Architected a sleek, mobile-first booking experience with instant date-picker and multi-currency pricing. Integrated seamless Stripe and Apple Pay checkout with immediate WhatsApp ticket confirmation.',
                'solution_steps' => [
                    [
                        'step' => '01',
                        'title' => 'Frictionless Mobile-First Booking UI',
                        'desc' => 'Designed an intuitive 3-step checkout with instant date selection, guest count increments, and hotel pickup location geocoding.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Apple Pay & Multi-Currency Checkout',
                        'desc' => 'Integrated Stripe Elements and Apple Pay, allowing international travelers to complete reservations in under 20 seconds.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Automated WhatsApp Ticket Delivery',
                        'desc' => 'Connected WhatsApp Business Cloud API to dispatch QR-coded boarding passes and driver pickup tracking automatically upon booking.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Core Web Vitals & Speed Optimization',
                        'desc' => 'Optimized imagery and assets to achieve a 1.2s page load speed across mobile networks, cutting bounce rates by over 50%.'
                    ]
                ],
                'deliverables' => ['Custom Web Application', 'Stripe & Apple Pay Integration', 'WhatsApp Ticket Engine', 'Core Web Vitals Tuning', 'Tour Booking API'],
                'results' => [
                    ['num' => '+380%', 'lbl' => 'Direct Tour Bookings'],
                    ['num' => '1.2s', 'lbl' => 'Page Experience Velocity'],
                    ['num' => '4.9★', 'lbl' => 'Traveler Review Rating']
                ],
                'testimonial' => [
                    'quote' => 'The mobile experience is night and day compared to other operators. Tourists book on their phones in seconds with Apple Pay. Conversions skyrocketed.',
                    'author' => 'Salim Al-Balooshi',
                    'role' => 'Operations Director, Tourzone UAE'
                ],
                'meta_title' => 'Tourzone Travel Case Study | +380% Bookings | Zenerom Web Platform',
                'meta_description' => 'How Zenerom engineered a mobile-first tour booking application for Tourzone UAE, increasing direct reservations by +380% with 1.2s page speed.',
                'sort_order' => 13,
            ]
        ];

        foreach ($caseStudies as $item) {
            CaseStudy::updateOrCreate(['slug' => $item['slug']], $item);
        }

        $this->command->info("Successfully seeded 13 verified, rich case studies into MySQL!");
    }
}
