<?php

namespace App\Services;

class ServiceCatalog
{
    /**
     * Get all registered services.
     */
    public static function all(): array
    {
        return [
            'seo-services-dubai' => [
                'slug' => 'seo-services-dubai',
                'num' => '01 / SEARCH',
                'category_badge' => 'Organic Growth',
                'title' => 'SEO Services in Dubai',
                'hero_title' => 'Dominate Page One With Data-Backed <span class="highlight-text">SEO Services in Dubai</span>',
                'meta_title' => 'SEO Services in Dubai | #1 Enterprise SEO Agency - Zenerom UAE',
                'meta_desc' => 'Scale organic commercial revenue with Dubai\'s premier enterprise SEO agency. Bilingual Arabic & English keyword dominance, Core Web Vitals optimization, tier-1 Gulf link building, and Google UAE Page One rankings.',
                'hero_desc' => 'Transform organic search into your highest-yielding inbound commercial pipeline. We engineer bilingual Arabic & English keyword supremacy, technical Core Web Vitals perfection, and high-authority Gulf link acquisition that capture high-ticket clients across Google UAE.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Senior SEO Directors Active Now',
                'primary_cta' => 'Request Free 28-Point SEO Audit',
                'whatsapp_text' => 'Hello Zenerom SEO Desk, I am interested in SEO Services in Dubai.',
                'stats' => [
                    ['num' => '+340%', 'label' => 'Average Inbound Organic Traffic Lift'],
                    ['num' => '150+', 'label' => 'Page-1 High-Value Dubai Keywords Ranked'],
                    ['num' => '4.9★', 'label' => 'Verified Google Client Rating (Burjuman HQ)'],
                    ['num' => '3.8x', 'label' => 'First-Year Inbound Revenue ROI Multiplier'],
                ],
                'pills' => [
                    'Technical Audits', 'Bilingual Arabic & English', 'Core Web Vitals 95+',
                    'Tier-1 Gulf Link Building', 'AI Overviews (SGE) Ready', 'Google Maps 3-Pack Supremacy'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • The Dubai Advantage',
                    'title' => 'Why Generic International SEO Fails in the UAE',
                    'desc' => 'Dubai is not a typical regional market. With an 85% expatriate demographic, skyrocketing Google Ads CPCs, and intense localized commercial rivalry, achieving organic dominance requires a bespoke Gulf search architecture.',
                    'cards' => [
                        [
                            'icon' => '🌐',
                            'title' => 'Bilingual Search Duality',
                            'desc' => 'Over 50% of high-intent commercial transactions in UAE are executed in Arabic or Franco-Arabic queries alongside English. We build native parallel semantic silos so you rank for both audiences without duplicate content penalties.',
                            'metric' => '50%+ Arabic Search Inquiries'
                        ],
                        [
                            'icon' => '💰',
                            'title' => 'Extreme CPC Arbitrage',
                            'desc' => 'With Google Ads clicks in Dubai real estate, corporate setup, and legal reaching AED 60 to AED 220+ per click, claiming organic Page 1 dominance saves our clients hundreds of thousands of dirhams in equivalent ad expenditure.',
                            'metric' => 'Up to AED 220/click saved'
                        ],
                        [
                            'icon' => '⚡',
                            'title' => 'Google AI Overviews (SGE)',
                            'desc' => 'Google UAE now serves AI-generated answer summaries above traditional blue links. We structure your schema entity relationships, E-E-A-T signals, and topical authority so Google’s AI citations reference your domain first.',
                            'metric' => 'Answer Engine Optimized'
                        ],
                        [
                            'icon' => '📍',
                            'title' => 'Micro-District Intent',
                            'desc' => 'Dubai buyers search by hyper-local zones: Business Bay, Downtown, DIFC, Dubai Marina, JLT, and Palm Jumeirah. We configure localized geo-landing pages and multi-emirate Google Map pack dominance.',
                            'metric' => '7-Emirate Geo-Targeting'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / TECHNICAL',
                        'badge' => 'Speed & Index',
                        'title' => 'Full-Stack Technical SEO & Core Web Vitals',
                        'desc' => 'Eliminate crawl bloat, render delays, and JavaScript hydration hurdles. We ensure Googlebot crawls, renders, and indexes your pages with sub-second velocity.',
                        'deliverables' => [
                            'Core Web Vitals (LCP, INP, CLS) optimization',
                            'Server response & TTFB acceleration for MENA',
                            'XML Sitemaps, robots.txt, and canonical triage',
                            'Mobile-first responsive indexation audits'
                        ],
                        'impact' => '100% Crawl Efficiency'
                    ],
                    [
                        'num' => '02 / KEYWORDS',
                        'badge' => 'High Commercial',
                        'title' => 'Bilingual Arabic & English Strategy',
                        'desc' => 'Target transactional keywords that decision-makers actually type. We map search volumes, buyer intent, and competitor gaps across UAE, Saudi Arabia, and the GCC.',
                        'deliverables' => [
                            'Modern Standard Arabic & Gulf dialect keyword silos',
                            'Search intent mapping (Commercial vs Transactional)',
                            'High-ticket Dubai search query discovery',
                            'Regional GCC search volume benchmarking'
                        ],
                        'impact' => 'Top-Tier Buyer Intent'
                    ],
                    [
                        'num' => '03 / ON-PAGE',
                        'badge' => 'Semantic Web',
                        'title' => 'On-Page Semantic & Schema Architecture',
                        'desc' => 'Transform standard web pages into deeply contextual knowledge graphs. We inject nested JSON-LD schema so search engines understand your entity relationships.',
                        'deliverables' => [
                            'Deep Schema.org injection (Service, Org, FAQ, Local)',
                            'Topical clusters & internal link graph balancing',
                            'High-converting meta titles & descriptive CTR copy',
                            'Hreflang multi-lingual configuration for UAE'
                        ],
                        'impact' => 'Rich Snippet Dominance'
                    ],
                    [
                        'num' => '04 / AUTHORITY',
                        'badge' => 'White-Hat PR',
                        'title' => 'Tier-1 Gulf Digital PR & Link Building',
                        'desc' => 'Earn contextual editorial links from respected UAE and Middle Eastern news media, business journals, and high-DR industry publications. Zero private blog networks (PBNs).',
                        'deliverables' => [
                            'Editorial placements in verified Gulf publications',
                            'Data-led Digital PR research studies and press releases',
                            'Unlinked brand mention reclamation across UAE web',
                            'Toxic backlink disavowal & penalty shielding'
                        ],
                        'impact' => 'Zero Algorithm Risk'
                    ],
                    [
                        'num' => '05 / LOCAL MAPS',
                        'badge' => 'Top 3 Pack',
                        'title' => 'Google Maps & Local Business Pack',
                        'desc' => 'Capture mobile and voice searches in your physical radius. We optimize your Google Business Profile (GBP) to secure top-3 map pack rankings in key Dubai districts.',
                        'deliverables' => [
                            'Google Business Profile category & geo-tagging tuning',
                            '60+ verified UAE directory NAP consistency',
                            'Automated client review acquisition architecture',
                            'Local citation graph across Dubai, Abu Dhabi & Sharjah'
                        ],
                        'impact' => 'Inbound Call Surge'
                    ],
                    [
                        'num' => '06 / REVENUE',
                        'badge' => 'CRO & CRM',
                        'title' => 'Conversion Rate Optimization & CRM Sync',
                        'desc' => 'Traffic without inquiries is a vanity metric. We optimize page layouts, lead capture forms, WhatsApp triggers, and Zoho CRM routing to maximize commercial deals.',
                        'deliverables' => [
                            'High-intent conversion path & CTA placement audits',
                            'Direct WhatsApp click-to-chat conversion hooks',
                            'Zoho CRM and HubSpot lead routing automation',
                            'Real-time Looker Studio executive attribution dashboards'
                        ],
                        'impact' => 'Direct Pipeline Growth'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'How long does it take to achieve Page One rankings in Dubai?',
                        'a' => 'Most competitive commercial keywords in Dubai see noticeable movement within 60 to 90 days. Sustainable Top 3 organic dominance typically materializes between months 4 and 6, depending on existing domain authority, technical debt, and competitor link velocity.'
                    ],
                    [
                        'q' => 'Why is bilingual (Arabic & English) SEO essential in the UAE?',
                        'a' => 'While English is the dominant commercial language, high-net-worth Emirati decision-makers and government entities frequently search in Arabic. Targeting both languages allows you to capture 100% of the available search demand while paying zero additional ad clicks.'
                    ],
                    [
                        'q' => 'How does Zenerom guarantee white-hat compliance with Google UAE updates?',
                        'a' => 'We strictly avoid automated spam, low-quality directories, or private blog networks. Our link building relies exclusively on genuine GCC digital PR, editorial outreach, industry citations, and high-value data studies that survive Google algorithm changes.'
                    ],
                    [
                        'q' => 'How do you optimize for Google AI Overviews and Search Generative Experience?',
                        'a' => 'We optimize for Answer Engine Optimization (AEO) and AI Overviews by structuring entity relationships, Schema.org knowledge graphs, author E-E-A-T credentials, and clear factual summaries that AI search algorithms cite as authoritative references.'
                    ],
                    [
                        'q' => 'Can you help if our website was hit by a Google Core Algorithm or Spam update?',
                        'a' => 'Yes. We conduct forensic penalty audits to identify thin content, algorithmic disavow needs, toxic link footprints, and technical indexation anomalies to systematically restore lost rankings and rebuild domain trust.'
                    ],
                    [
                        'q' => 'What is included in your monthly SEO reporting?',
                        'a' => 'You receive access to a 24/7 real-time Google Looker Studio dashboard tracking keyword movements across Google UAE, organic impressions, click-through rates, Core Web Vitals health, and qualified form submissions/phone inquiries, along with monthly executive briefings.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Current Monthly Organic Visitors',
                    'min1' => 1000, 'max1' => 50000, 'step1' => 1000, 'val1' => 5000, 'unit1' => ' /mo',
                    'label2' => 'Average Customer Value / Deal Size',
                    'min2' => 500, 'max2' => 25000, 'step2' => 500, 'val2' => 4500, 'unit2' => 'AED ',
                    'label3' => 'Target Lead Conversion Rate',
                    'min3' => 1.0, 'max3' => 8.0, 'step3' => 0.5, 'val3' => 3.0, 'unit3' => '%',
                    'res_title' => 'Projected Inbound Commercial Impact',
                    'res1_label' => 'Projected Monthly Inbound Leads',
                    'res2_label' => 'Estimated Monthly Organic Revenue',
                    'res3_label' => 'Equivalent Google Ads Media Savings',
                ],
                'case_study_categories' => ['seo', 'e-commerce'],
                'blog_categories' => ['seo', 'growth-strategy'],
                'view' => 'seo-dubai'
            ],

            'google-ads-agency-dubai' => [
                'slug' => 'google-ads-agency-dubai',
                'num' => '02 / PAID',
                'category_badge' => 'Instant Leads',
                'title' => 'Google Ads & Search (SEM) Agency Dubai',
                'hero_title' => 'Scale Predictable Revenue With High-Intent <span class="highlight-text">Google Ads &amp; SEM in Dubai</span>',
                'meta_title' => 'Google Ads Agency Dubai | Top PPC & Google Search Management - Zenerom UAE',
                'meta_desc' => 'Work with Dubai\'s leading Google Ads agency for Google Search, Performance Max, Shopping feeds, and conversion tracking engineered for qualified leads, sales, and transparent UAE ROAS.',
                'hero_desc' => 'Stop bleeding budget on unqualified clicks and inflated UAE CPCs. We architect high-intent Google Search, Shopping feeds, and Performance Max campaigns with strict negative keyword filters and full-funnel attribution that drive profitable commercial inquiries across Dubai & the GCC.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Google Premier Certified Directors Active',
                'primary_cta' => 'Claim Free AED 5,000 Ad Account Audit',
                'whatsapp_text' => 'Hello Zenerom Ads Desk, I am interested in Google Ads & SEM management in Dubai.',
                'stats' => [
                    ['num' => '4.8x', 'label' => 'Average Verified Client ROAS'],
                    ['num' => 'AED 45M+', 'label' => 'Profitable Ad Spend Managed in UAE'],
                    ['num' => '-38%', 'label' => 'Average Cost-Per-Lead (CPA) Reduction'],
                    ['num' => '<15 Min', 'label' => 'Instant WhatsApp Lead Routing SLA'],
                ],
                'pills' => [
                    'Performance Max Mastered', 'Strict Negative Filters', 'GA4 & Server-Side GTM',
                    'Quality Score 8+ Blueprint', 'Bilingual Ad Copy (Ar/En)', 'WhatsApp Conversion Sync'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • Paid Search Economics',
                    'title' => 'Where Google Ads Budgets Quietly Disappear in Dubai',
                    'desc' => 'An ad account can generate thousands of clicks and still fail commercially. In Dubai’s hyper-competitive paid market, loose search match types and misconfigured location settings silently drain advertising capital.',
                    'cards' => [
                        [
                            'icon' => '🎯',
                            'title' => 'Loose Search Intent & Match Types',
                            'desc' => 'Broad queries and neglected search-term reports expose your ad budget to casual job seekers, students, and competitor research. We build strict exact and phrase match silos with hundreds of negative commercial filters.',
                            'metric' => 'Zero Wasted Clicks'
                        ],
                        [
                            'icon' => '📍',
                            'title' => 'Location Settings Slippage',
                            'desc' => 'Default Google Ads targeting serves ads to users who are outside Dubai but "interested in" Dubai. We configure presence-only location fencing so you only pay when genuine residents and local buyers click.',
                            'metric' => '100% Verified UAE Traffic'
                        ],
                        [
                            'icon' => '⚡',
                            'title' => 'Disconnected Landing Page Friction',
                            'desc' => 'A high-converting ad cannot compensate for a generic desktop landing page. We craft mobile-first landing funnels with sub-second speeds, localized proof, and direct 1-click WhatsApp consultation buttons.',
                            'metric' => '+42% Landing Page Conversion'
                        ],
                        [
                            'icon' => '📊',
                            'title' => 'Every Form Counted Equally',
                            'desc' => 'Treating a junk form the same as a qualified enterprise buyer poisons smart bidding. We implement offline conversion tracking connected to your CRM so Google bidding algorithms optimize for closed revenue.',
                            'metric' => 'Closed-Loop Revenue Tracking'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / SEARCH',
                        'badge' => 'High Intent',
                        'title' => 'Hyper-Targeted Google Search Campaigns',
                        'desc' => 'Capture decision-makers at the exact second they are searching for your service in Dubai. We isolate high-intent commercial keywords and eliminate casual search volume.',
                        'deliverables' => [
                            'Single-theme ad groups (STAG) with exact intent match',
                            'Aggressive negative keyword lists updated weekly',
                            'Bilingual Arabic & English ad copy with local nuances',
                            'Ad asset extensions (callouts, sitelinks, structured snippets)'
                        ],
                        'impact' => 'High Quality Score (8-10)'
                    ],
                    [
                        'num' => '02 / P-MAX',
                        'badge' => 'AI Bidding',
                        'title' => 'Performance Max (P-Max) Mastery',
                        'desc' => 'Deploy Google’s machine-learning engine across YouTube, Search, Display, Discover, and Maps with pristine audience signals and strict brand exclusion rules.',
                        'deliverables' => [
                            'First-party customer list audience signal ingestion',
                            'High-resolution custom image and video creative assets',
                            'Search theme intent guidance and brand safety exclusions',
                            'URL expansion controls to stop landing page deviation'
                        ],
                        'impact' => 'Omnichannel Reach'
                    ],
                    [
                        'num' => '03 / SHOPPING',
                        'badge' => 'E-Commerce',
                        'title' => 'Google Shopping & Merchant Center Feeds',
                        'desc' => 'Showcase products with pricing, ratings, and instant stock availability directly on Google Search for UAE shoppers ready to buy immediately.',
                        'deliverables' => [
                            'Google Merchant Center feed optimization & bug remediation',
                            'Product title and category tax enrichment for UAE searches',
                            'Custom labels segmentation by product profit margin',
                            'Dynamic remarketing tags across Google Display Network'
                        ],
                        'impact' => 'Maximized ROAS'
                    ],
                    [
                        'num' => '04 / TRACKING',
                        'badge' => 'Attribution',
                        'title' => 'GA4 & Server-Side Conversion Architecture',
                        'desc' => 'Connect Google Analytics 4, Google Tag Manager, and server-side tracking so Apple iOS privacy updates never blind your bidding algorithms.',
                        'deliverables' => [
                            'Server-side Google Tag Manager (sGTM) deployment',
                            'Enhanced Conversions with hashed customer data',
                            'Call tracking and WhatsApp click-to-chat event capture',
                            'Offline CRM deal status sync back to Google Ads'
                        ],
                        'impact' => '100% Attribution Accuracy'
                    ],
                    [
                        'num' => '05 / FUNNELS',
                        'badge' => 'CRO',
                        'title' => 'High-Converting UAE Landing Pages',
                        'desc' => 'We design and build bespoke, lighting-fast landing pages engineered to match search intent and guide prospects directly into a conversation.',
                        'deliverables' => [
                            'Mobile-first responsive layouts loading in under 0.8 seconds',
                            'WhatsApp Business click-to-chat instant qualifying hooks',
                            'Trust signals: Google Reviews, client logos, trade licenses',
                            'A/B split testing of headlines, CTAs, and form fields'
                        ],
                        'impact' => '2x Lead Conversion'
                    ],
                    [
                        'num' => '06 / SCALE',
                        'badge' => 'Accountability',
                        'title' => 'Transparent Weekly Spend & Performance Reviews',
                        'desc' => 'You pay ad spend directly to Google with zero markup or hidden fees. We provide 24/7 Looker Studio dashboards and weekly strategic briefings.',
                        'deliverables' => [
                            'Live Google Looker Studio executive reporting dashboard',
                            'Transparent search term audits and cost-per-lead analysis',
                            'Weekly optimization sprints led by senior Dubai directors',
                            'Direct WhatsApp strategy channel with your account lead'
                        ],
                        'impact' => 'Total Transparency'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'How does Zenerom prevent wasted Google Ads spend in Dubai?',
                        'a' => 'We enforce strict presence-only geographic targeting (excluding accidental outside-UAE clicks), build comprehensive negative-keyword libraries (filtering job seekers and informational queries), and implement offline conversion tracking so smart bidding only optimizes for paying customers.'
                    ],
                    [
                        'q' => 'Do I pay ad spend to Zenerom or directly to Google?',
                        'a' => 'You always pay your ad spend directly to Google on your own corporate credit card. Zenerom never marks up media spend. We charge a transparent, fixed monthly management fee based on campaign complexity and target scope.'
                    ],
                    [
                        'q' => 'How quickly will we see inbound leads after launching Google Ads?',
                        'a' => 'Google Search campaigns typically start generating qualified phone calls and form submissions within 24 to 48 hours of campaign activation. Within the first 30 days, we refine search queries and negative keywords to steadily lower your cost per lead.'
                    ],
                    [
                        'q' => 'Why is WhatsApp integration crucial for Google Ads in the UAE?',
                        'a' => 'Over 80% of Dubai consumers prefer communicating via WhatsApp rather than waiting for an email reply. We integrate click-to-WhatsApp landing page hooks that pre-populate the exact service searched, triggering immediate conversations that convert at 3x higher rates.'
                    ],
                    [
                        'q' => 'What is the minimum recommended ad budget for Google Ads in Dubai?',
                        'a' => 'Depending on your industry (e.g., real estate, B2B services, clinic, or corporate setup), we typically recommend a minimum starting media spend of AED 5,000 to AED 15,000 per month to ensure sufficient click volume for algorithm learning and rapid lead generation.'
                    ],
                    [
                        'q' => 'Can you audit our existing Google Ads account before we commit?',
                        'a' => 'Yes. We provide a complimentary, confidential 32-point Google Ads audit that examines your negative keywords, Quality Scores, conversion tracking integrity, and search term leakage to uncover immediate cost-saving opportunities.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Planned Monthly Google Ad Spend',
                    'min1' => 3000, 'max1' => 100000, 'step1' => 1000, 'val1' => 12000, 'unit1' => 'AED ',
                    'label2' => 'Estimated Cost Per Click (CPC)',
                    'min2' => 2, 'max2' => 45, 'step2' => 1, 'val2' => 12, 'unit2' => 'AED ',
                    'label3' => 'Landing Page Conversion Rate',
                    'min3' => 3.0, 'max3' => 18.0, 'step3' => 0.5, 'val3' => 8.5, 'unit3' => '%',
                    'res_title' => 'Projected Google Ads Performance Impact',
                    'res1_label' => 'Projected Qualified Monthly Leads',
                    'res2_label' => 'Estimated Cost Per Qualified Lead (CPA)',
                    'res3_label' => 'Estimated Pipeline Commercial Value',
                ],
                'case_study_categories' => ['performance-ads', 'corporate'],
                'blog_categories' => ['performance-ads', 'growth-strategy', 'digital-marketing'],
            ],

            'social-media-marketing-dubai' => [
                'slug' => 'social-media-marketing-dubai',
                'num' => '03 / SOCIAL',
                'category_badge' => 'Brand Authority',
                'title' => 'Social Media Marketing & Advertising Dubai',
                'hero_title' => 'Command Market Attention With Premium <span class="highlight-text">Social Media Marketing in Dubai</span>',
                'meta_title' => 'Social Media Marketing Dubai | Top SMM Agency & Ads - Zenerom UAE',
                'meta_desc' => 'Elevate brand authority and drive customer acquisition with Dubai\'s top social media marketing agency. High-production Reels, TikTok ads, LinkedIn B2B lead gen, and aesthetic grid management across the UAE.',
                'hero_desc' => 'Turn passive social scrollers into high-value paying clients. We engineer high-retention video reels, aesthetic grid narratives, targeted Meta & TikTok paid ad funnels, and B2B LinkedIn executive outreach tailored for the affluent UAE demographic.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Creative Directors & Social Strategists Active',
                'primary_cta' => 'Request Social Media Strategy & Proposal',
                'whatsapp_text' => 'Hello Zenerom Social Desk, I am interested in Social Media Marketing & Ads in Dubai.',
                'stats' => [
                    ['num' => '6.2x', 'label' => 'Average Social Ad ROAS Multiplier'],
                    ['num' => '12M+', 'label' => 'Target GCC Impressions Generated Monthly'],
                    ['num' => '4.9★', 'label' => 'Verified Client Rating in Dubai'],
                    ['num' => '+280%', 'label' => 'Average Community Engagement Surge'],
                ],
                'pills' => [
                    'Short-Form Viral Reels', 'B2B LinkedIn Funnels', 'Meta Ads Retargeting',
                    'TikTok Commercial Ads', 'Aesthetic Grid Design', 'Influencer Sync & Digital PR'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • Visual Brand Power',
                    'title' => 'Why Generic Social Media Fails in Dubai',
                    'desc' => 'Dubai has the highest smartphone and social media penetration in the world. Stock photo graphics and generic quotes get completely ignored. UAE consumers demand cinematic video, authentic local storytelling, and responsive interaction.',
                    'cards' => [
                        [
                            'icon' => '🎬',
                            'title' => 'Short-Form Video Dominance',
                            'desc' => 'Over 80% of organic and paid reach on Instagram and TikTok is now driven by short-form video reels. We write, film, and edit high-hook video content that keeps viewers glued through the first 3 seconds.',
                            'metric' => '3-Second Hook Mastery'
                        ],
                        [
                            'icon' => '💼',
                            'title' => 'High-Net-Worth B2B LinkedIn',
                            'desc' => 'For Dubai corporate services, legal, and tech firms, decision-makers are on LinkedIn. We build executive thought leadership, sponsored InMail campaigns, and lead generation forms directly in LinkedIn.',
                            'metric' => 'Direct Decision-Maker Access'
                        ],
                        [
                            'icon' => '🎯',
                            'title' => 'Precision Paid Meta Retargeting',
                            'desc' => 'Organic reach alone is not enough. We pair organic community building with multi-tier Meta (Instagram/Facebook) ad funnels that retarget website visitors and video viewers into closed inquiries.',
                            'metric' => 'Full-Funnel Retargeting'
                        ],
                        [
                            'icon' => '💬',
                            'title' => 'Instant DM & Community Nurturing',
                            'desc' => 'Unanswered direct messages cost deals. We implement automated Instagram direct response flows and community moderators that answer inquiries in minutes and book consultations directly.',
                            'metric' => '<10 Min DM Response Time'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / CREATIVE',
                        'badge' => 'Video First',
                        'title' => 'Cinematic Reels & Short-Form Video',
                        'desc' => 'Original on-location filming, scriptwriting, and editing of high-energy Instagram Reels and TikTok videos tailored for Dubai luxury, corporate, and retail audiences.',
                        'deliverables' => [
                            'Professional 4K shooting and on-camera interview direction',
                            'Hook-first editing with dynamic captions, sound design, and color grading',
                            'Platform-native trends, trending audio, and algorithmic hashtag strategy',
                            'Bilingual subtitles (Arabic and English) for maximum reach'
                        ],
                        'impact' => '+320% Video Views'
                    ],
                    [
                        'num' => '02 / META ADS',
                        'badge' => 'Paid Acquisition',
                        'title' => 'Targeted Meta (Instagram & Facebook) Ads',
                        'desc' => 'High-converting paid social ad campaigns targeting specific nationalities, income tiers, job titles, and interest behaviors across Dubai, Abu Dhabi, and the GCC.',
                        'deliverables' => [
                            'Custom audience lookalikes and website visitor retargeting',
                            'Dynamic carousel, video reel, and Instant Experience ad formats',
                            'Direct WhatsApp click-to-message ad funnels with automated qualification',
                            'A/B testing of visual creatives, copy angles, and value propositions'
                        ],
                        'impact' => '4x - 7x ROAS'
                    ],
                    [
                        'num' => '03 / B2B LINKEDIN',
                        'badge' => 'Enterprise',
                        'title' => 'LinkedIn Executive Growth & B2B Campaigns',
                        'desc' => 'Turn your company page and C-suite profiles into trusted industry authorities that generate enterprise inquiries from UAE founders and executives.',
                        'deliverables' => [
                            'Ghostwritten executive thought leadership articles and carousel decks',
                            'Lead Gen Form ads targeting CEOs, directors, and procurement leads',
                            'Sponsored Content matched by company size, industry, and seniority',
                            'Targeted Account-Based Marketing (ABM) campaign architecture'
                        ],
                        'impact' => 'C-Suite Lead Pipeline'
                    ],
                    [
                        'num' => '04 / BRANDING',
                        'badge' => 'Aesthetics',
                        'title' => 'Premium Feed Aesthetic & Grid Architecture',
                        'desc' => 'Craft a bespoke, high-luxury aesthetic that reflects the premium stature of your business in Dubai. Zero generic templates or cheesy graphics.',
                        'deliverables' => [
                            'Custom monthly content calendar with clear thematic pillars',
                            'Editorial photography direction, product staging, and typography',
                            'Interactive Instagram Stories, Highlights, and Polls for daily engagement',
                            'Brand asset library with reusable Figma social design tokens'
                        ],
                        'impact' => 'Elevated Brand Prestige'
                    ],
                    [
                        'num' => '05 / TIKTOK',
                        'badge' => 'Viral Growth',
                        'title' => 'TikTok Commercial & Spark Ads',
                        'desc' => 'Harness TikTok’s explosive regional growth across the UAE and Saudi Arabia with authentic, creator-style promotional videos that drive massive sales.',
                        'deliverables' => [
                            'TikTok Creative Center trend analysis and hook ideation',
                            'Spark Ads leveraging authentic client testimonials and creator reels',
                            'Lead generation and eCommerce catalog sync for Dubai retailers',
                            'Soundtrack licensing and high-energy pacing optimization'
                        ],
                        'impact' => 'Rapid GCC Reach'
                    ],
                    [
                        'num' => '06 / COMMUNITY',
                        'badge' => 'Conversion',
                        'title' => 'Community Management & Social CRM',
                        'desc' => 'We don’t just post; we actively engage. Our team moderates comments, handles incoming DMs, and routes warm prospects straight to your sales team.',
                        'deliverables' => [
                            '7-day community monitoring and professional comment moderation',
                            'Automated DM conversation funnels with WhatsApp handover',
                            'Crisis response protocols and brand sentiment protection',
                            'Monthly sentiment, demographic growth, and attribution reporting'
                        ],
                        'impact' => 'Zero Lost Opportunities'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Which social media platforms are most effective for businesses in Dubai?',
                        'a' => 'Instagram is the dominant visual and lifestyle platform for B2C and luxury services. LinkedIn is paramount for B2B corporate services, tech, and enterprise consultancies. TikTok has skyrocketed in UAE for high-volume engagement, while Facebook remains effective for expatriate community targeting.'
                    ],
                    [
                        'q' => 'Do you provide professional on-location filming and photography in Dubai?',
                        'a' => 'Yes. Our in-house production crew comes to your office, clinic, showroom, or project site anywhere in Dubai or Abu Dhabi with cinema-grade cameras, lighting, and audio equipment to capture authentic, high-definition content.'
                    ],
                    [
                        'q' => 'How do you measure ROI from social media marketing?',
                        'a' => 'We track both leading indicators (engagement rate, video completion rate, click-through rate) and commercial lagging indicators (direct WhatsApp inquiries, form fills, cost per acquisition, and closed deals) through our integrated Looker Studio dashboards.'
                    ],
                    [
                        'q' => 'Can you manage both organic content and paid social advertising?',
                        'a' => 'Yes. The highest-performing social media strategies combine consistent organic brand building with precision paid ad amplification. We handle both creative production and media buying under one unified strategy.'
                    ],
                    [
                        'q' => 'How often do you post content on our social channels?',
                        'a' => 'Depending on your package, we typically publish 3 to 5 high-production Reels/posts per week, complemented by daily interactive Stories and continuous paid ad testing to maintain maximum algorithmic velocity.'
                    ],
                    [
                        'q' => 'Will we have final approval over all posts before they go live?',
                        'a' => 'Absolutely. We prepare a complete visual content calendar 7 days in advance with copy, creative assets, and hashtags for your team’s review and sign-off via our collaborative approval portal.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Target Monthly Audience Reach',
                    'min1' => 20000, 'max1' => 500000, 'step1' => 10000, 'val1' => 150000, 'unit1' => ' People',
                    'label2' => 'Monthly Social Media Ad Spend',
                    'min2' => 2500, 'max2' => 50000, 'step2' => 500, 'val2' => 8000, 'unit2' => 'AED ',
                    'label3' => 'Estimated Engagement Rate',
                    'min3' => 1.5, 'max3' => 8.0, 'step3' => 0.5, 'val3' => 4.2, 'unit3' => '%',
                    'res_title' => 'Projected Social Brand & Commercial Velocity',
                    'res1_label' => 'Projected Direct Inquiries & DMs',
                    'res2_label' => 'Estimated Target Video Views',
                    'res3_label' => 'Projected Pipeline Deal Influence',
                ],
                'case_study_categories' => ['performance-ads', 'corporate'],
                'blog_categories' => ['social-media', 'performance-ads', 'branding'],
            ],

            'lead-generation-dubai' => [
                'slug' => 'lead-generation-dubai',
                'num' => '04 / REVENUE',
                'category_badge' => 'Qualified Inquiries',
                'title' => 'Performance Lead Generation Services Dubai',
                'hero_title' => 'Generate Predictable High-Ticket Commercial <span class="highlight-text">Inquiries in Dubai</span>',
                'meta_title' => 'Lead Generation Services Dubai | B2B & B2C Inbound Inquiries - Zenerom UAE',
                'meta_desc' => 'Drive consistent, qualified commercial leads with Dubai\'s top performance lead generation agency. Data-backed multi-channel funnels, instant WhatsApp bots, and CRM routing that convert clicks into paying clients.',
                'hero_desc' => 'Stop chasing unqualified inquiries. We build end-to-end performance lead generation engines combining friction-free mobile landing pages, multi-channel paid acquisition, WhatsApp qualification bots, and real-time CRM routing that deliver sales-ready buyers.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Growth Architects & Funnel Engineers Active',
                'primary_cta' => 'Schedule Free Lead Generation Consultation',
                'whatsapp_text' => 'Hello Zenerom Growth Desk, I am interested in Performance Lead Generation in Dubai.',
                'stats' => [
                    ['num' => '18,500+', 'label' => 'Qualified B2B & B2C Leads Delivered'],
                    ['num' => 'AED 42', 'label' => 'Average UAE B2B Cost Per Lead (CPL)'],
                    ['num' => '34%', 'label' => 'Lead-to-Consultation Conversion Rate'],
                    ['num' => '100%', 'label' => 'Automated CRM & WhatsApp Pipeline Sync'],
                ],
                'pills' => [
                    'Frictionless Mobile Funnels', 'Instant WhatsApp Qualifying', 'B2B Lead Scoring',
                    'CPA Minimization', 'Multi-Channel Acquisition', 'Real-Time CRM Routing'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • Revenue Velocity',
                    'title' => 'Why Most Lead Generation Campaigns Fail in Dubai',
                    'desc' => 'Capturing random email addresses is useless if your sales reps cannot contact them. In Dubai, decision-makers are busy and demand instant, frictionless communication.',
                    'cards' => [
                        [
                            'icon' => '⚡',
                            'title' => 'The 5-Minute Follow-Up Rule',
                            'desc' => 'Research shows lead qualification drops by 8x if follow-up exceeds 5 minutes. We build automated WhatsApp bots and instant SMS notifications that connect your sales team the moment an inquiry lands.',
                            'metric' => 'Under 3-Minute Response'
                        ],
                        [
                            'icon' => '🛡️',
                            'title' => 'Strict Buyer Intent Filtering',
                            'desc' => 'Cheap leads are expensive if they waste your sales team\'s time. We embed qualifying dropdowns (budget, timeline, trade license status) directly into lead funnels to weed out casual tire-kickers.',
                            'metric' => '100% Verified Commercial Intent'
                        ],
                        [
                            'icon' => '📱',
                            'title' => 'Mobile-First Zero Friction',
                            'desc' => 'Over 85% of Dubai inquiries originate from smartphones. Multi-page forms with tiny desktop fields cause immediate bounce. We design thumb-friendly, 2-step micro-funnels optimized for speed.',
                            'metric' => '<15 Seconds to Submit'
                        ],
                        [
                            'icon' => '🔄',
                            'title' => 'Omnichannel Retargeting Loops',
                            'desc' => 'High-ticket buyers rarely convert on the first visit. We deploy sequential retargeting across Google Search, Instagram, and LinkedIn so your brand remains top-of-mind until the contract is signed.',
                            'metric' => '3x Higher Funnel Conversion'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / ARCHITECTURE',
                        'badge' => 'Strategy',
                        'title' => 'Buyer Persona & Commercial Offer Mapping',
                        'desc' => 'We analyze your target market in Dubai, establish your ideal client profile (ICP), and craft irresistible commercial value propositions that compel decision-makers to raise their hand.',
                        'deliverables' => [
                            'Target audience segmentation and buying trigger identification',
                            'Irresistible lead magnet and introductory offer design',
                            'Competitor pricing and messaging GAP benchmarking',
                            'Full-funnel conversion economics and CPA targets'
                        ],
                        'impact' => 'High-Intent Positioning'
                    ],
                    [
                        'num' => '02 / FUNNELS',
                        'badge' => 'Speed & UX',
                        'title' => 'High-Converting Bespoke Landing Funnels',
                        'desc' => 'Sub-second mobile landing pages designed specifically around conversion psychology, social proof, and clear single-action calls to action.',
                        'deliverables' => [
                            'Ultra-fast responsive pages built without bloated page builders',
                            'Strategic placement of client testimonials, case metrics, and badges',
                            'Micro-interactions and progressive form disclosure to reduce friction',
                            'A/B multivariate headline and CTA conversion rate testing'
                        ],
                        'impact' => '15% - 25% Page Conversion'
                    ],
                    [
                        'num' => '03 / ACQUISITION',
                        'badge' => 'Traffic Sync',
                        'title' => 'Multi-Channel Intent-Driven Acquisition',
                        'desc' => 'We funnel targeted traffic from Google Search, Meta Ads, and LinkedIn B2B into dedicated landing pages, ensuring every dollar spent targets active buyers.',
                        'deliverables' => [
                            'Google Search high-intent transactional keyword capture',
                            'LinkedIn Sponsored Content and InMail for corporate decision-makers',
                            'Meta Ads dynamic video hooks and custom audience retargeting',
                            'Negative keyword scrub to eliminate budget-draining non-buyers'
                        ],
                        'impact' => 'Scalable Lead Flow'
                    ],
                    [
                        'num' => '04 / WHATSAPP',
                        'badge' => 'Instant Sync',
                        'title' => 'Automated WhatsApp Qualifying Engine',
                        'desc' => 'Integrate WhatsApp Business Cloud API directly into your funnels to qualify leads automatically and route warm buyers directly to your closers.',
                        'deliverables' => [
                            '1-click WhatsApp chat launch with pre-filled context message',
                            'Automated interactive qualifying questions (budget, location, timeline)',
                            'Instant lead alert dispatched to sales agent phones via push/SMS',
                            'Automated calendar scheduling integration (Calendly/Zoho Bookings)'
                        ],
                        'impact' => 'Instant Lead Qualification'
                    ],
                    [
                        'num' => '05 / CRM ROUTING',
                        'badge' => 'Automation',
                        'title' => 'Enterprise CRM & Pipeline Automation',
                        'desc' => 'Zero leads lost in spreadsheets. We connect every inquiry directly to Zoho CRM, HubSpot, or Salesforce with automated stage progression and reminders.',
                        'deliverables' => [
                            'Direct webhook and API sync between forms and your CRM',
                            'Automated lead scoring based on company size and engagement',
                            'Round-robin lead assignment to your Dubai sales team',
                            'Automated follow-up email and WhatsApp nurturing drip sequences'
                        ],
                        'impact' => '100% Pipeline Visibility'
                    ],
                    [
                        'num' => '06 / OPTIMIZATION',
                        'badge' => 'Attribution',
                        'title' => 'Closed-Loop Revenue Attribution',
                        'desc' => 'We don’t celebrate leads; we celebrate closed revenue. Our analytics track which ad campaigns generated actual cash receipts in your bank account.',
                        'deliverables' => [
                            'Real-time Looker Studio dashboard tracking cost per qualified inquiry',
                            'Weekly review of sales conversation feedback and lead quality',
                            'Continuous bidding adjustment based on high-yield customer segments',
                            'Monthly executive strategy review at our Burjuman Tower flagship'
                        ],
                        'impact' => 'Maximizing Client Profit'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'What is the difference between a lead and a qualified lead in Dubai?',
                        'a' => 'A basic lead is just a name and contact number that may or may not need your service. A qualified lead is an active decision-maker who has confirmed their timeline, budget requirements, and commercial need through our automated qualification filters before reaching your sales team.'
                    ],
                    [
                        'q' => 'How quickly will we start receiving leads after campaign launch?',
                        'a' => 'Once your bespoke landing funnels and ad channels are launched (typically within 5 to 7 business days from kickoff), qualified leads begin arriving in real time within the first 24 to 48 hours.'
                    ],
                    [
                        'q' => 'Can you integrate incoming leads directly into our existing CRM?',
                        'a' => 'Yes. We build custom API webhooks and integrations for Zoho CRM, HubSpot, Salesforce, Bitrix24, LeadSquared, and direct Google Sheets / WhatsApp notifications with zero data delay.'
                    ],
                    [
                        'q' => 'What industries in Dubai benefit most from performance lead generation?',
                        'a' => 'We have achieved exceptional results for luxury real estate developers and brokerages, corporate business setup & legal consultancies, B2B industrial equipment suppliers, specialized medical clinics, enterprise software/SaaS, and commercial interior fit-outs.'
                    ],
                    [
                        'q' => 'What happens if a lead submits invalid contact information?',
                        'a' => 'Our landing pages utilize real-time phone number formatting and email verification APIs to filter out fake submissions before they are logged, ensuring your sales reps only dial valid numbers.'
                    ],
                    [
                        'q' => 'How does Zenerom structure its lead generation pricing?',
                        'a' => 'We offer transparent monthly retainers combined with performance milestones based on campaign complexity, target geography (Dubai vs All 7 Emirates vs GCC), and lead volume targets.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Monthly Lead Generation Budget',
                    'min1' => 5000, 'max1' => 80000, 'step1' => 1000, 'val1' => 15000, 'unit1' => 'AED ',
                    'label2' => 'Average Target Cost Per Lead (CPL)',
                    'min2' => 25, 'max2' => 250, 'step2' => 5, 'val2' => 55, 'unit2' => 'AED ',
                    'label3' => 'Sales Close Rate on Qualified Leads',
                    'min3' => 5.0, 'max3' => 35.0, 'step3' => 1.0, 'val3' => 18.0, 'unit3' => '%',
                    'res_title' => 'Projected Inbound Sales Pipeline Velocity',
                    'res1_label' => 'Projected Monthly Qualified Leads',
                    'res2_label' => 'Estimated Closed Deals / Customers',
                    'res3_label' => 'Projected Pipeline Revenue Velocity',
                ],
                'case_study_categories' => ['performance-ads', 'corporate', 'seo'],
                'blog_categories' => ['performance-ads', 'growth-strategy', 'digital-marketing'],
            ],

            'website-development-dubai' => [
                'slug' => 'website-development-dubai',
                'num' => '05 / WEB',
                'category_badge' => 'Fast & Custom',
                'title' => 'Custom Website Development Company in Dubai',
                'hero_title' => 'Bespoke, High-Performance <span class="highlight-text">Websites Built for Dubai Leaders</span>',
                'meta_title' => 'Website Development Company in Dubai | Custom Web Design - Zenerom UAE',
                'meta_desc' => 'Work with Dubai\'s premier web development company for custom corporate websites, WordPress platforms, and headless solutions built for sub-second page speed, mobile UX, and lead generation.',
                'hero_desc' => 'A website should make the next commercial decision effortless. We plan and build custom, ultra-fast corporate websites, responsive WordPress platforms, and modern digital platforms with sub-second speeds, flawless Core Web Vitals, and conversion architecture engineered to convert.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Senior Full-Stack Engineers Active',
                'primary_cta' => 'Request Free Website Architecture Consultation',
                'whatsapp_text' => 'Hello Zenerom Web Engineering Desk, I am interested in Custom Website Development in Dubai.',
                'stats' => [
                    ['num' => '<0.7s', 'label' => 'Average Mobile Page Load Velocity'],
                    ['num' => '100%', 'label' => 'Google Core Web Vitals Pass Rate'],
                    ['num' => '250+', 'label' => 'Enterprise Websites Shipped in UAE'],
                    ['num' => '4.9★', 'label' => 'Verified Client Rating (Burjuman HQ)'],
                ],
                'pills' => [
                    'Clean Custom Code', 'Sub-Second Speed (<0.8s)', 'Mobile-First UX',
                    'Headless Architecture', 'Bilingual Arabic/English', 'Lead Conversion Ready'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • Engineering Excellence',
                    'title' => 'Why Off-the-Shelf Website Templates Fail in Dubai',
                    'desc' => 'Most business websites fail not because they lack flashy graphics, but because they are bloated with heavy plugins, take 5+ seconds to load on mobile, and fail to answer buyer questions clearly.',
                    'cards' => [
                        [
                            'icon' => '⚡',
                            'title' => 'Sub-Second Page Load Speed',
                            'desc' => 'Over 53% of mobile visitors abandon a website that takes over 3 seconds to load. We write clean, optimized code that scores 95+ on Google PageSpeed Insights and passes Core Web Vitals flawlessly.',
                            'metric' => 'Sub-800ms Load Times'
                        ],
                        [
                            'icon' => '📱',
                            'title' => 'True Mobile-First Architecture',
                            'desc' => 'Dubai users browse predominantly on high-end smartphones. We design UI/UX from the mobile screen up, ensuring navigation menus, CTAs, and media are effortless to interact with using one thumb.',
                            'metric' => '100% Mobile Optimized'
                        ],
                        [
                            'icon' => '🌐',
                            'title' => 'Native Bilingual Arabization',
                            'desc' => 'Arabic is not an afterthought translated with Google Translate. We build native RTL (Right-to-Left) stylesheets and typography ensuring pristine Arabic typography alongside English.',
                            'metric' => 'Pixel-Perfect RTL Support'
                        ],
                        [
                            'icon' => '🔒',
                            'title' => 'Bank-Grade Security & Clean Code',
                            'desc' => 'Zero bloated theme forests or vulnerable cracked plugins. We engineer secure, hand-crafted code with automated daily backups, SSL enforcement, and modern web application firewalls.',
                            'metric' => 'Zero Vulnerability SLA'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / ARCHITECTURE',
                        'badge' => 'Strategy & UX',
                        'title' => 'Information Architecture & UX Wireframing',
                        'desc' => 'We structure site navigation and page layouts around customer buying decisions, ensuring high-value service pages, proof points, and CTAs are effortlessly discoverable.',
                        'deliverables' => [
                            'User journey mapping and customer conversion funnel blueprints',
                            'Interactive high-fidelity Figma prototypes for mobile and desktop',
                            'Micro-interactions and intuitive navigation hierarchy design',
                            'Bilingual content wireframes with clear proof placement'
                        ],
                        'impact' => 'Clear Commercial Clarity'
                    ],
                    [
                        'num' => '02 / DEVELOPMENT',
                        'badge' => 'Clean Code',
                        'title' => 'Full-Stack Custom Web Engineering',
                        'desc' => 'Hand-crafted development using modern, lightweight frameworks (Laravel, React, Node, or custom lightweight WordPress) engineered for pure speed and security.',
                        'deliverables' => [
                            'Semantic HTML5, CSS3, and modern modular JavaScript',
                            'Sub-second Largest Contentful Paint (LCP) and zero Cumulative Layout Shift',
                            'Database query optimization and server-level caching integration',
                            'Modular component architecture for effortless future scaling'
                        ],
                        'impact' => 'Blazing Sub-Second Speed'
                    ],
                    [
                        'num' => '03 / ARABIC RTL',
                        'badge' => 'Localization',
                        'title' => 'Bilingual Arabic & English RTL Architecture',
                        'desc' => 'Flawless multi-lingual capability with independent RTL stylesheets, native Arabic typography (Tajawal, Cairo), and automated hreflang tag alignment for search engines.',
                        'deliverables' => [
                            'Independent RTL stylesheet architecture for seamless Arabic rendering',
                            'Professional Arabic corporate typography pairing',
                            'Correct hreflang and canonical setup to prevent duplicate content penalties',
                            '1-click seamless language switcher with preserved page context'
                        ],
                        'impact' => 'Complete UAE Audience Reach'
                    ],
                    [
                        'num' => '04 / SEO READY',
                        'badge' => 'Search Ready',
                        'title' => 'Built-In Enterprise SEO & Schema Markup',
                        'desc' => 'Your website launches ready to dominate Google UAE. We inject nested JSON-LD schema graphs, meta tags, XML sitemaps, and optimized heading hierarchies.',
                        'deliverables' => [
                            'Organization, Service, FAQ, and Breadcrumb Schema.org JSON-LD',
                            'Clean, descriptive URL structures and automated 301 redirect mapping',
                            'Automatic XML sitemap generation and Google Search Console validation',
                            'OpenGraph and Twitter Card social sharing previews'
                        ],
                        'impact' => 'Instant Google Indexation'
                    ],
                    [
                        'num' => '05 / LEAD HOOKS',
                        'badge' => 'Conversion',
                        'title' => 'Conversion Architecture & WhatsApp Integration',
                        'desc' => 'We transform passive brochure websites into active revenue generators with frictionless form mechanics, floating WhatsApp triggers, and CRM routing.',
                        'deliverables' => [
                            'Direct click-to-WhatsApp floating widget with personalized pre-filled text',
                            'AJAX asynchronous forms with zero page reload and instant feedback',
                            'Direct API routing to Zoho CRM, HubSpot, or corporate email',
                            'GA4 and Google Tag Manager conversion event tracking pre-installed'
                        ],
                        'impact' => '3x Inbound Inquiries'
                    ],
                    [
                        'num' => '06 / SUPPORT',
                        'badge' => 'Ownership',
                        'title' => 'Complete Client Ownership & SLA Maintenance',
                        'desc' => 'You own 100% of your source code, domain, and server assets with zero proprietary lock-in, backed by our Burjuman Tower technical support team.',
                        'deliverables' => [
                            'Full source code handover on GitHub / GitLab with complete documentation',
                            'Client CMS admin training video library for your marketing staff',
                            'Automated daily off-site cloud backups and uptime monitoring',
                            'Rapid-response Dubai technical support SLA for maintenance'
                        ],
                        'impact' => '100% Peace of Mind'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'How long does it take to design and launch a custom website in Dubai?',
                        'a' => 'A custom corporate website typically takes 3 to 6 weeks from initial UX wireframes to final launch. Complex web platforms or multilingual enterprise portals may take 6 to 10 weeks depending on custom integrations and API requirements.'
                    ],
                    [
                        'q' => 'Will our team be able to easily update website content after launch?',
                        'a' => 'Yes. We build intuitive, easy-to-use CMS backends (custom WordPress or Laravel dashboard) that allow your internal team to effortlessly update text, upload blog posts, publish case studies, and change banners without writing a single line of code.'
                    ],
                    [
                        'q' => 'Do you build websites from scratch or use pre-made templates?',
                        'a' => 'We design every single website bespoke in Figma and code it cleanly. We never use bloated pre-made templates that slow down mobile loading speed and make your brand look identical to competitors.'
                    ],
                    [
                        'q' => 'What technologies do you recommend for corporate websites in Dubai?',
                        'a' => 'For fast, scalable corporate websites, we recommend custom PHP/Laravel or modern headless WordPress paired with lightweight CSS and vanilla JavaScript. For web applications, we deploy Laravel, React, and Node.js.'
                    ],
                    [
                        'q' => 'Do we own 100% of the website and source code upon completion?',
                        'a' => 'Yes, absolutely. Once final milestone payment is completed, you own 100% of the copyright, source code, design assets, and database credentials with zero vendor lock-in.'
                    ],
                    [
                        'q' => 'Can you redesign our existing website without losing our current Google rankings?',
                        'a' => 'Yes. We conduct a thorough pre-launch URL mapping and migration audit. We preserve all established URL slugs and set up strict 301 redirects to ensure your organic traffic and Google rankings remain completely intact or improve.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Estimated Website Pages Needed',
                    'min1' => 5, 'max1' => 60, 'step1' => 5, 'val1' => 15, 'unit1' => ' Pages',
                    'label2' => 'Expected Monthly Website Visitors',
                    'min2' => 1000, 'max2' => 80000, 'step2' => 1000, 'val2' => 8000, 'unit2' => ' /mo',
                    'label3' => 'Target Lead Inquiry Rate',
                    'min3' => 1.5, 'max3' => 8.0, 'step3' => 0.5, 'val3' => 3.5, 'unit3' => '%',
                    'res_title' => 'Projected Digital Platform Commercial Impact',
                    'res1_label' => 'Projected Monthly Inbound Inquiries',
                    'res2_label' => 'Estimated Speed Improvement',
                    'res3_label' => 'Projected Annual Inbound Value',
                ],
                'case_study_categories' => ['web-dev', 'corporate', 'e-commerce'],
                'blog_categories' => ['web-dev', 'software-dev', 'growth-strategy'],
            ],

            'ecommerce-development-dubai' => [
                'slug' => 'ecommerce-development-dubai',
                'num' => '06 / E-COMMERCE',
                'category_badge' => 'High Conversion',
                'title' => 'E-Commerce Development Services Dubai (Shopify & WooCommerce)',
                'hero_title' => 'Scale Your Digital Storefront With <span class="highlight-text">High-Converting E-Commerce in Dubai</span>',
                'meta_title' => 'E-Commerce Development Dubai | Shopify & WooCommerce Stores - Zenerom UAE',
                'meta_desc' => 'Build high-performing, secure, and scalable online stores with Dubai\'s leading eCommerce development agency. Shopify Plus, WooCommerce, GCC payment gateways (Tabby, Tamara, Telr), and localized checkouts.',
                'hero_desc' => 'Turn online browsers into high-frequency buyers. We engineer bespoke, lightning-fast digital storefronts on Shopify Plus, WooCommerce, and headless frameworks with seamless GCC payment gateways (Tabby, Tamara, Telr, Stripe) and frictionless localized checkouts.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Certified Shopify & E-Commerce Architects Active',
                'primary_cta' => 'Schedule E-Commerce Architecture Consultation',
                'whatsapp_text' => 'Hello Zenerom E-Commerce Desk, I am interested in building or scaling an online store in Dubai.',
                'stats' => [
                    ['num' => '+412%', 'label' => 'Verified Client E-Commerce Revenue Lift'],
                    ['num' => '1.8s', 'label' => 'Average Mobile Checkout Completion Time'],
                    ['num' => '100%', 'label' => 'GCC Payment Gateway Compliance'],
                    ['num' => '99.98%', 'label' => 'Uptime During High-Traffic Sales Sprints'],
                ],
                'pills' => [
                    'Shopify Plus Certified', 'Tabby & Tamara BNPL', 'GCC Multi-Currency',
                    'Custom Inventory Sync', 'Speed & Conversion CRO', 'Automated WhatsApp Notifications'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • Regional Retail Evolution',
                    'title' => 'What Makes E-Commerce Unique in the UAE & GCC',
                    'desc' => 'Selling online in Dubai is fundamentally different from Western markets. Over 70% of transactions require local payment methods (Tabby, Tamara, Apple Pay), bilingual Arabic navigation, and fast same-day delivery tracking.',
                    'cards' => [
                        [
                            'icon' => '💳',
                            'title' => 'Buy Now Pay Later (BNPL) Dominance',
                            'desc' => 'Integrating Tabby and Tamara splits payments into 4 interest-free installments, lifting average order value (AOV) by up to 35% and drastically reducing cart abandonment across the UAE.',
                            'metric' => '+35% Average Order Value'
                        ],
                        [
                            'icon' => '⚡',
                            'title' => '1-Click Apple Pay & Mobile Checkout',
                            'desc' => 'Over 80% of GCC retail purchases occur on iPhones. Forcing customers to enter a 16-digit credit card on mobile kills conversion. We implement instant Apple Pay and Google Pay checkouts.',
                            'metric' => '<10 Second Mobile Checkout'
                        ],
                        [
                            'icon' => '🚚',
                            'title' => 'Local Courier & Warehouse Sync',
                            'desc' => 'Real-time integrations with UAE logistics providers (Aramex, Fetchr, DHL, Quiqup) for automated airway bill (AWB) generation, pickup scheduling, and SMS tracking.',
                            'metric' => 'Automated Order Fulfillment'
                        ],
                        [
                            'icon' => '🌍',
                            'title' => 'GCC Multi-Currency & Tax Ready',
                            'desc' => 'Display local currencies (AED, SAR, QAR, KWD) with automatic IP detection and precise UAE 5% VAT calculation and invoicing compliant with the Federal Tax Authority (FTA).',
                            'metric' => '100% FTA VAT Compliant'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / PLATFORMS',
                        'badge' => 'E-Commerce Core',
                        'title' => 'Shopify Plus & WooCommerce Engineering',
                        'desc' => 'Custom theme development engineered from the ground up without bloated app dependencies that slow down your store’s mobile experience.',
                        'deliverables' => [
                            'Custom Liquid / WooCommerce template coding built to design specs',
                            'Sub-2 second page load speeds across catalog and product pages',
                            'Mobile-first responsive UX with sticky Add-to-Cart functionality',
                            'Bilingual Arabic (RTL) and English storefront synchronization'
                        ],
                        'impact' => 'Sub-2s Mobile Velocity'
                    ],
                    [
                        'num' => '02 / PAYMENTS',
                        'badge' => 'GCC Gateways',
                        'title' => 'GCC Payment Gateway & BNPL Integration',
                        'desc' => 'Seamless integration of regional payment gateways ensuring frictionless transactions and zero payment drop-offs for UAE shoppers.',
                        'deliverables' => [
                            'Direct integration with Tabby, Tamara, Telr, Stripe, and Network International',
                            'Native Apple Pay and Google Pay 1-tap checkout activation',
                            'Cash on Delivery (COD) verification and automated OTP shielding',
                            'Multi-currency switcher with live GCC foreign exchange rates'
                        ],
                        'impact' => 'Zero Payment Drop-Off'
                    ],
                    [
                        'num' => '03 / CATALOG',
                        'badge' => 'SEO & Silos',
                        'title' => 'Structured Product Taxonomy & Silo SEO',
                        'desc' => 'We structure category silos, faceted navigation, and Schema.org Product markups to rank on Page One of Google UAE for high-intent buying terms.',
                        'deliverables' => [
                            'Category silo architecture designed for maximum crawl efficiency',
                            'Faceted navigation duplicate-content canonical sanitization',
                            'Product, Offer, AggregateRating, and MerchantReturnPolicy JSON-LD schema',
                            'Google Shopping product feed synchronization'
                        ],
                        'impact' => 'Organic Search Supremacy'
                    ],
                    [
                        'num' => '04 / LOGISTICS',
                        'badge' => 'Operations',
                        'title' => 'Automated ERP & Logistics Synchronization',
                        'desc' => 'Connect your digital storefront with your warehouse inventory, accounting software, and UAE courier fleets to eliminate manual order processing.',
                        'deliverables' => [
                            'Automated integration with Aramex, DHL, SMSA, and local delivery couriers',
                            'Real-time inventory synchronization with Zoho Inventory, SAP, or Odoo',
                            'Automated tax-compliant PDF VAT invoice generation for UAE buyers',
                            'Customer return portal and automated refund workflows'
                        ],
                        'impact' => 'Automated Operations'
                    ],
                    [
                        'num' => '05 / RETENTION',
                        'badge' => 'LTV & CRM',
                        'title' => 'WhatsApp Order Tracking & Cart Recovery',
                        'desc' => 'Reclaim abandoned carts and notify customers about shipping updates via automated WhatsApp messages that boast a 98% open rate.',
                        'deliverables' => [
                            'Automated WhatsApp abandoned checkout recovery sequences',
                            'Order confirmation, out-for-delivery, and shipping notifications via WhatsApp',
                            'Post-purchase review request and VIP loyalty reward automations',
                            'Klaviyo email flows: Welcome Series, Back in Stock, Win-Back'
                        ],
                        'impact' => '+28% Cart Recovery'
                    ],
                    [
                        'num' => '06 / SCALING',
                        'badge' => 'High Volume',
                        'title' => 'High-Traffic Flash Sale Architecture',
                        'desc' => 'Prepare your store for White Friday, Ramadan, and Dubai Shopping Festival traffic spikes with server caching and stress testing.',
                        'deliverables' => [
                            'Load testing simulating 20,000+ concurrent checkout requests',
                            'Redis caching and Content Delivery Network (CDN) edge routing',
                            'Database indexing and third-party script deferral',
                            'Dedicated standby technical engineering squad during major sales'
                        ],
                        'impact' => '100% Uptime During Peaks'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'Which platform is better for UAE e-commerce: Shopify or WooCommerce?',
                        'a' => 'Shopify (and Shopify Plus) is ideal for brands seeking high stability, instant payment gateway integrations, zero server maintenance, and fast scaling. WooCommerce offers complete code ownership, custom business logic, and zero platform transaction fees. We help you choose the best fit during our initial architecture consultation.'
                    ],
                    [
                        'q' => 'Can we integrate Tabby and Tamara into our online store?',
                        'a' => 'Yes. We are certified implementation partners for both Tabby and Tamara in the UAE. We integrate their BNPL widgets onto product pages and checkout flows, ensuring customers see installment breakdowns that boost conversions.'
                    ],
                    [
                        'q' => 'How do you handle Cash on Delivery (COD) in the UAE to prevent fake orders?',
                        'a' => 'We implement automated SMS or WhatsApp OTP verification before a COD order is confirmed. This prevents fake addresses, verifies active phone numbers, and reduces failed delivery rates by over 40%.'
                    ],
                    [
                        'q' => 'Will our store be fully compliant with UAE VAT laws?',
                        'a' => 'Yes. We configure precise 5% UAE VAT calculations across all catalog items, display VAT-inclusive pricing as required by the FTA, and generate automated, compliant tax invoices with your corporate TRN.'
                    ],
                    [
                        'q' => 'How fast will our online store load on mobile phones?',
                        'a' => 'We engineer bespoke stores to achieve sub-2 second load times on 4G/5G mobile connections in the UAE, scoring 90+ on Google PageSpeed tests by eliminating bloated scripts and optimizing images.'
                    ],
                    [
                        'q' => 'Can you migrate our products, customers, and order history from an old store?',
                        'a' => 'Yes. We perform seamless migrations of product databases, customer accounts, order histories, and SEO URL redirects with zero downtime and zero data loss.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Target Monthly Online Orders',
                    'min1' => 100, 'max1' => 10000, 'step1' => 50, 'val1' => 850, 'unit1' => ' Orders',
                    'label2' => 'Average Order Value (AOV)',
                    'min2' => 80, 'max2' => 3500, 'step2' => 20, 'val2' => 380, 'unit2' => 'AED ',
                    'label3' => 'Projected Conversion Lift via UX & BNPL',
                    'min3' => 15, 'max3' => 60, 'step3' => 5, 'val3' => 35, 'unit3' => '%',
                    'res_title' => 'Projected Digital Storefront Revenue Lift',
                    'res1_label' => 'Projected Monthly Online GMV',
                    'res2_label' => 'Additional Revenue from BNPL & Speed',
                    'res3_label' => 'Projected Annual E-Commerce Revenue',
                ],
                'case_study_categories' => ['e-commerce', 'web-dev', 'seo'],
                'blog_categories' => ['web-dev', 'growth-strategy', 'digital-marketing'],
            ],

            'mobile-app-development-dubai' => [
                'slug' => 'mobile-app-development-dubai',
                'num' => '07 / MOBILE',
                'category_badge' => 'iOS & Android',
                'title' => 'Mobile App Development Company in Dubai (iOS & Android)',
                'hero_title' => 'Build World-Class <span class="highlight-text">Native &amp; Cross-Platform Apps</span> in Dubai',
                'meta_title' => 'Mobile App Development Company Dubai | iOS & Android Apps - Zenerom UAE',
                'meta_desc' => 'Leading mobile app development company in Dubai. We engineer native iOS, Android, Flutter, and React Native apps with bank-grade security, intuitive UX, and App Store approval.',
                'hero_desc' => 'Empower your brand with intuitive, lightning-fast mobile apps. As Dubai\'s premier app engineering agency, we build native iOS (Swift), Android (Kotlin), and cross-platform (Flutter & React Native) applications with military-grade security, smooth UX, and App Store approval.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Senior iOS & Android Squad Active',
                'primary_cta' => 'Book Free App Architecture Session',
                'whatsapp_text' => 'Hello Zenerom Mobile App Desk, I have a mobile application concept to discuss.',
                'stats' => [
                    ['num' => '160+', 'label' => 'Mobile Applications Successfully Shipped'],
                    ['num' => '4.8★', 'label' => 'Average App Store & Google Play Rating'],
                    ['num' => '99.9%', 'label' => 'Crash-Free Session Stability SLA'],
                    ['num' => '100%', 'label' => 'First-Pass Apple App Store Approval Rate'],
                ],
                'pills' => [
                    'Flutter & React Native', 'Native iOS Swift & Android Kotlin', 'Biometric Security',
                    'Real-Time Cloud Sync', 'Offline-First Architecture', 'Payment Gateway APIs'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • Mobile First Region',
                    'title' => 'Why Mobile App Excellence Matters in the UAE',
                    'desc' => 'UAE consumers have zero patience for sluggish apps or clunky onboarding. With the highest iOS penetration in the GCC, an app must feel ultra-smooth, load in milliseconds, and integrate local payment systems seamlessly.',
                    'cards' => [
                        [
                            'icon' => '📱',
                            'title' => 'Dominant iOS Market Share',
                            'desc' => 'In Dubai, iPhone users represent the highest spending demographic. We design with strict Apple Human Interface Guidelines, leveraging FaceID, Apple Pay, and native Swift fluidity.',
                            'metric' => 'High-Spending iOS Users'
                        ],
                        [
                            'icon' => '⚡',
                            'title' => 'Cross-Platform Cost Efficiency',
                            'desc' => 'Build once, ship on both iOS and Android simultaneously. Our Flutter and React Native architectures reduce development time and cost by 40% without compromising on native 60fps performance.',
                            'metric' => '40% Development Savings'
                        ],
                        [
                            'icon' => '🔒',
                            'title' => 'Bank-Grade Data Security',
                            'desc' => 'We engineer enterprise-grade encryption (AES-256), secure keychain token storage, and biometric authentication to comply with UAE Telecommunications and Digital Government Regulatory Authority (TDRA) standards.',
                            'metric' => 'TDRA & GDPR Compliant'
                        ],
                        [
                            'icon' => '🔔',
                            'title' => 'Real-Time Push Notifications',
                            'desc' => 'Harness personalized push notifications via Firebase and OneSignal to drive daily active usage (DAU), flash sale announcements, and instant order tracking.',
                            'metric' => '+45% User Retention'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / DISCOVERY',
                        'badge' => 'Product Spec',
                        'title' => 'Product Scoping & Figma UI/UX Prototypes',
                        'desc' => 'We transform your concept into clickable, interactive Figma prototypes, defining user stories, edge cases, and screen states before writing code.',
                        'deliverables' => [
                            'Interactive mobile prototype with realistic micro-animations',
                            'Complete user persona and technical product requirement doc (PRD)',
                            'Information architecture and database schema mapping',
                            'Apple Human Interface & Google Material 3 design compliance'
                        ],
                        'impact' => 'Zero Development Rework'
                    ],
                    [
                        'num' => '02 / CROSS-PLATFORM',
                        'badge' => 'Flutter & React',
                        'title' => 'Flutter & React Native Engineering',
                        'desc' => 'High-performance cross-platform development sharing 90%+ code between iOS and Android while delivering native look, feel, and 60fps responsiveness.',
                        'deliverables' => [
                            'Single codebase for both Apple App Store and Google Play Store',
                            'Native bridge integrations for camera, GPS, bluetooth, and accelerometer',
                            'State management with Riverpod, Bloc, or Redux for clean scalability',
                            'Offline data persistence and background sync capabilities'
                        ],
                        'impact' => 'Single Codebase Economy'
                    ],
                    [
                        'num' => '03 / NATIVE DEV',
                        'badge' => 'Swift & Kotlin',
                        'title' => 'Pure Native iOS & Android Development',
                        'desc' => 'For complex apps requiring deep hardware integration, heavy 3D rendering, or ultra-low latency, we build pure native Swift and Kotlin applications.',
                        'deliverables' => [
                            'Native Swift / SwiftUI iOS application architecture',
                            'Native Kotlin Android architecture with Jetpack Compose',
                            'Direct integration with Apple HealthKit, ARKit, or Google Fit',
                            'Sub-100ms hardware response and peak performance'
                        ],
                        'impact' => 'Max Hardware Fluidity'
                    ],
                    [
                        'num' => '04 / BACKEND',
                        'badge' => 'Cloud APIs',
                        'title' => 'Scalable Cloud Backend & REST/GraphQL APIs',
                        'desc' => 'We engineer secure cloud infrastructure on AWS or Google Cloud with auto-scaling microservices, robust relational databases, and WebSocket real-time updates.',
                        'deliverables' => [
                            'High-performance RESTful and GraphQL API endpoints',
                            'Real-time WebSockets for live chat, bidding, and location tracking',
                            'Role-based administration portal for internal management',
                            'Automated cloud database replication and disaster recovery'
                        ],
                        'impact' => 'Enterprise Scalability'
                    ],
                    [
                        'num' => '05 / PAYMENTS',
                        'badge' => 'Fintech',
                        'title' => 'GCC Payment Gateways & In-App Purchases',
                        'desc' => 'Integrate Apple Pay, Google Pay, Tabby, Tamara, and local credit card processing directly into the app for effortless in-app transactions.',
                        'deliverables' => [
                            'Apple In-App Purchases (IAP) and Google Play Billing setup',
                            'Stripe, Telr, and Network International SDK integrations',
                            'Encrypted PCI-DSS compliant credit card tokenization',
                            'Automated digital invoice and receipt generation'
                        ],
                        'impact' => 'Frictionless In-App Revenue'
                    ],
                    [
                        'num' => '06 / DEPLOYMENT',
                        'badge' => 'Store Approval',
                        'title' => 'App Store & Google Play Submission & SLA',
                        'desc' => 'We manage the entire submission, review, and approval process with Apple and Google, guaranteeing your app goes live without rejections.',
                        'deliverables' => [
                            'App Store Optimization (ASO) titles, keywords, and screenshots',
                            'Apple Developer and Google Play Console account setup',
                            'Crash reporting via Crashlytics and performance telemetry',
                            'Continuous OS update compatibility maintenance (iOS & Android)'
                        ],
                        'impact' => '100% First-Pass Approval'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'How much does it cost to build a mobile app in Dubai?',
                        'a' => 'Costs depend on feature complexity, platform choices (native vs Flutter cross-platform), and backend requirements. A standard MVP typically ranges from AED 25,000 to AED 50,000, while complex enterprise platforms range higher. We provide a detailed fixed-scope proposal during our initial discovery call.'
                    ],
                    [
                        'q' => 'Should we choose Flutter or Native development for our app?',
                        'a' => 'Flutter or React Native is recommended for 90% of business apps because it cuts development costs and timelines by 40% while maintaining native 60fps speed on both iOS and Android. Pure native development (Swift/Kotlin) is reserved for apps requiring specialized low-level hardware or intensive graphics processing.'
                    ],
                    [
                        'q' => 'How long does mobile app development take from start to launch?',
                        'a' => 'A typical mobile app project takes between 8 to 14 weeks from UX wireframing and design to backend API development, testing, and App Store approval.'
                    ],
                    [
                        'q' => 'Do you guarantee approval on Apple App Store and Google Play?',
                        'a' => 'Yes. We build strictly to Apple Human Interface Guidelines and Google Developer Policies. We handle all submission paperwork, privacy manifests, and review feedback until your app is live on both stores.'
                    ],
                    [
                        'q' => 'Who owns the intellectual property and source code of the app?',
                        'a' => 'You own 100% of the intellectual property, design files, source code repositories, and backend server infrastructure upon project completion. There are zero licensing lock-ins.'
                    ],
                    [
                        'q' => 'Do you provide ongoing maintenance and post-launch updates?',
                        'a' => 'Yes. We offer monthly SLA maintenance packages covering iOS/Android new version updates, cloud server monitoring, bug fixes, and feature enhancement sprints.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Target Monthly Active Users (MAU)',
                    'min1' => 1000, 'max1' => 100000, 'step1' => 1000, 'val1' => 12000, 'unit1' => ' Users',
                    'label2' => 'Target In-App Transaction / Subscription',
                    'min2' => 20, 'max2' => 800, 'step2' => 10, 'val2' => 150, 'unit2' => 'AED ',
                    'label3' => 'Estimated In-App Conversion Rate',
                    'min3' => 2.0, 'max3' => 15.0, 'step3' => 0.5, 'val3' => 5.5, 'unit3' => '%',
                    'res_title' => 'Projected Mobile Application Commercial Velocity',
                    'res1_label' => 'Projected Monthly In-App Transacting Users',
                    'res2_label' => 'Estimated Monthly Mobile Revenue',
                    'res3_label' => 'Projected Annual Mobile Ecosystem Value',
                ],
                'case_study_categories' => ['web-dev', 'industrial'],
                'blog_categories' => ['software-dev', 'web-dev'],
            ],

            'web-application-development-dubai' => [
                'slug' => 'web-application-development-dubai',
                'num' => '08 / SAAS',
                'category_badge' => 'Cloud Apps & Portals',
                'title' => 'Web Application & Cloud Portal Development Dubai',
                'hero_title' => 'Custom Web Applications, <span class="highlight-text">SaaS Platforms &amp; Portals</span> in Dubai',
                'meta_title' => 'Web Application Development Dubai | Custom SaaS & Client Portals - Zenerom UAE',
                'meta_desc' => 'Build scalable custom web applications, SaaS platforms, B2B customer portals, and internal management tools in Dubai. High-security Laravel, Node.js, and React engineering.',
                'hero_desc' => 'Automate core operations, streamline client workflows, and build scalable SaaS products. We engineer high-security web applications, internal operational dashboards, custom client portals, and cloud backends with robust Laravel, Node.js, and React architectures.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Cloud Architects & Full-Stack Engineers Active',
                'primary_cta' => 'Request Web Application Architecture Blueprint',
                'whatsapp_text' => 'Hello Zenerom Software Desk, I have a web application / SaaS project to discuss.',
                'stats' => [
                    ['num' => '99.99%', 'label' => 'Enterprise SLA Cloud Uptime Guarantee'],
                    ['num' => '<85ms', 'label' => 'Average Database Query & API Latency'],
                    ['num' => 'Role-Based', 'label' => 'Granular Permissions & Audit Logging'],
                    ['num' => 'Zero', 'label' => 'Downtime Automated CI/CD Deployments'],
                ],
                'pills' => [
                    'Custom Client Portals', 'Scalable SaaS Architecture', 'REST & GraphQL APIs',
                    'Role-Based Access Control', 'Progressive Web Apps (PWA)', 'Automated Cloud Backups'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • Enterprise Efficiency',
                    'title' => 'Why Custom Web Applications Outperform Generic Software',
                    'desc' => 'Off-the-shelf software forces your business to adapt its processes to rigid third-party limitations while charging expensive per-user monthly licensing. Custom web applications are built precisely around your operational advantage.',
                    'cards' => [
                        [
                            'icon' => '⚙️',
                            'title' => 'Bespoke Workflow Automation',
                            'desc' => 'Eliminate hundreds of hours spent juggling messy Excel sheets and manual data transfers. We build tailored workflow software that automates approvals, billing, and reporting.',
                            'metric' => '70% Manual Time Saved'
                        ],
                        [
                            'icon' => '👥',
                            'title' => 'Secure B2B Client Portals',
                            'desc' => 'Give high-value clients a modern, self-service portal to view project statuses, download tax invoices, submit support tickets, and review documents securely 24/7.',
                            'metric' => 'Elevated Client Trust'
                        ],
                        [
                            'icon' => '🚀',
                            'title' => 'Multi-Tenant SaaS Scaling',
                            'desc' => 'Launching a tech startup in the UAE? We build multi-tenant software-as-a-service architectures with automated recurring subscriptions, Stripe billing, and database tenant isolation.',
                            'metric' => 'SaaS Investment Ready'
                        ],
                        [
                            'icon' => '🔐',
                            'title' => 'Enterprise Security & Compliance',
                            'desc' => 'Role-based access control (RBAC), multi-factor authentication (MFA), detailed audit trails, and data isolation compliant with UAE regional data protection laws.',
                            'metric' => 'Complete Compliance'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / SYSTEM DESIGN',
                        'badge' => 'Architecture',
                        'title' => 'Software Architecture & Database Modeling',
                        'desc' => 'We design normalized relational database schemas, microservice boundaries, and clear entity relationship models that scale effortlessly to millions of queries.',
                        'deliverables' => [
                            'Comprehensive system architecture blueprint and ERD diagrams',
                            'Microservices vs modular monolithic strategy tailored for budget',
                            'Third-party software integration mapping (accounting, payment, CRM)',
                            'Security vulnerability assessment and compliance roadmap'
                        ],
                        'impact' => 'Rock-Solid Scalability'
                    ],
                    [
                        'num' => '02 / FRONTEND',
                        'badge' => 'React & Vue',
                        'title' => 'High-Speed Single Page Applications (SPA)',
                        'desc' => 'Ultra-fluid browser interfaces engineered with React, Next.js, or Vue.js delivering instantaneous transitions without full-page browser reloads.',
                        'deliverables' => [
                            'Component-driven UI architecture using modern design systems',
                            'Real-time data visualization charts, graphs, and metric widgets',
                            'State management with Redux Toolkit or Zustand for peak responsiveness',
                            'Responsive layout optimized for executive tablets and desktop monitors'
                        ],
                        'impact' => 'Instantaneous UI Speed'
                    ],
                    [
                        'num' => '03 / BACKEND',
                        'badge' => 'Laravel & Node',
                        'title' => 'Robust Backend API & Business Logic',
                        'desc' => 'Secure, scalable application backends built with Laravel (PHP 8.3+) or Node.js with automated test suites, queued background jobs, and caching.',
                        'deliverables' => [
                            'RESTful and GraphQL API endpoints with comprehensive Swagger documentation',
                            'Asynchronous queue processing for heavy reports and PDF generation',
                            'Redis caching for high-speed session management and data retrieval',
                            'Automated unit and feature testing via Pest and PHPUnit'
                        ],
                        'impact' => 'Sub-85ms API Speed'
                    ],
                    [
                        'num' => '04 / PORTALS',
                        'badge' => 'B2B Client UX',
                        'title' => 'B2B Client & Vendor Self-Service Portals',
                        'desc' => 'Empower your customers, partners, and vendors with dedicated, branded portals to manage their accounts, transactions, and project milestones.',
                        'deliverables' => [
                            'Custom branded login and onboarding with two-factor authentication',
                            'Invoice download, statement generation, and direct payment processing',
                            'Document exchange with digital signatures and version history',
                            'Granular permission tiers (Admin, Manager, Viewer, Finance)'
                        ],
                        'impact' => 'Zero Administrative Friction'
                    ],
                    [
                        'num' => '05 / DEVOPS',
                        'badge' => 'Cloud Hosting',
                        'title' => 'Cloud Infrastructure & Automated CI/CD',
                        'desc' => 'Deployment on AWS, DigitalOcean, or Google Cloud with automated Docker containers, automated GitHub Actions deployment pipelines, and SSL.',
                        'deliverables' => [
                            'Automated CI/CD deployment pipelines on GitHub Actions',
                            'Containerized environments with Docker and Kubernetes',
                            'Automated daily encrypted database backups and off-site storage',
                            'Cloudflare enterprise DDoS protection and Web Application Firewall'
                        ],
                        'impact' => '99.99% Uptime SLA'
                    ],
                    [
                        'num' => '06 / MAINTENANCE',
                        'badge' => 'Longevity',
                        'title' => 'Continuous Feature Sprints & Technical Support',
                        'desc' => 'We don’t abandon you after launch. Our senior engineering squad provides ongoing code maintenance, database tuning, and agile sprint features.',
                        'deliverables' => [
                            'Dedicated monthly engineering sprint hours for feature rollouts',
                            '24/7 automated uptime and server health monitoring',
                            'Dependency patching and security vulnerability monitoring',
                            'Direct communication with your senior lead software architect'
                        ],
                        'impact' => 'Continuous Platform Growth'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'What is the difference between a website and a custom web application?',
                        'a' => 'A website is primarily informational, designed to educate visitors and capture inbound leads. A web application is an interactive software tool (like an online banking dashboard, customer portal, ERP system, or booking platform) where users log in, manage data, execute transactions, and automate business processes.'
                    ],
                    [
                        'q' => 'Which technology stack do you use for web application development?',
                        'a' => 'We primarily utilize Laravel for clean, rock-solid enterprise backend logic and database security, paired with React.js or Next.js for high-speed interactive frontend interfaces, backed by PostgreSQL or MySQL and Redis caching.'
                    ],
                    [
                        'q' => 'Can your web application integrate with our existing software and databases?',
                        'a' => 'Yes. We build custom API connectors to bridge your web application with accounting platforms (Zoho Books, QuickBooks, Xero), enterprise ERPs (SAP, Oracle, Odoo), payment gateways, and WhatsApp.'
                    ],
                    [
                        'q' => 'How do you ensure data security and UAE regulatory compliance?',
                        'a' => 'We enforce end-to-end data encryption (in transit and at rest), strict role-based access controls (RBAC), multi-factor authentication (MFA), and audit logging. Server infrastructure can be hosted locally within UAE data centers (AWS Bahrain/UAE or Microsoft Azure UAE) to comply with regional data residency guidelines.'
                    ],
                    [
                        'q' => 'Can you build a multi-tenant SaaS application ready for investor funding?',
                        'a' => 'Yes. We specialize in SaaS architectures featuring multi-tenant database isolation, automated tiered subscription billing with Stripe, automated onboarding workflows, and executive analytics dashboards.'
                    ],
                    [
                        'q' => 'Do we own the intellectual property and code upon project delivery?',
                        'a' => 'Yes. 100% of the custom source code, database architecture, design systems, and deployment configurations belong entirely to your company with zero licensing fees or vendor lock-in.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Active Business Users / Team Size',
                    'min1' => 5, 'max1' => 200, 'step1' => 5, 'val1' => 25, 'unit1' => ' Users',
                    'label2' => 'Average Hourly Cost of Staff',
                    'min2' => 40, 'max2' => 300, 'step2' => 10, 'val2' => 95, 'unit2' => 'AED /hr',
                    'label3' => 'Estimated Hours Saved per User / Month',
                    'min3' => 5, 'max3' => 40, 'step3' => 1, 'val3' => 16, 'unit3' => ' Hours',
                    'res_title' => 'Projected Operational Savings & ROI',
                    'res1_label' => 'Monthly Staff Hours Automated',
                    'res2_label' => 'Estimated Monthly Labor Cost Savings',
                    'res3_label' => 'Projected Annual Operational Value',
                ],
                'case_study_categories' => ['web-dev', 'industrial'],
                'blog_categories' => ['software-dev', 'web-dev'],
            ],

            'branding-agency-dubai' => [
                'slug' => 'branding-agency-dubai',
                'num' => '09 / BRANDING',
                'category_badge' => 'Identity Systems',
                'title' => 'Branding & Creative Agency in Dubai',
                'hero_title' => 'Craft Prestigious Brand Identities That <span class="highlight-text">Command Respect in Dubai</span>',
                'meta_title' => 'Branding Agency in Dubai | Corporate Identity & Design - Zenerom UAE',
                'meta_desc' => 'Best branding agency in Dubai since 2015. We craft bespoke brand identities, iconic logos, corporate brand guidelines, bilingual Arabic/English typography, and Figma design systems.',
                'hero_desc' => 'In the UAE’s ultra-competitive business landscape, perception is currency. We build distinct brand visual systems, iconic logo marks, comprehensive corporate identity guidelines, and digital Figma design systems that captivate high-net-worth clients and GCC decision-makers.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Creative Directors & Brand Strategists Active',
                'primary_cta' => 'Request Corporate Brand Identity Consultation',
                'whatsapp_text' => 'Hello Zenerom Brand Lab, I am looking to develop or rebrand our corporate identity in Dubai.',
                'stats' => [
                    ['num' => '350+', 'label' => 'Brand Identities Crafted Across GCC'],
                    ['num' => '100%', 'label' => 'Bespoke Vector Typography & Marks'],
                    ['num' => '60-Page', 'label' => 'Comprehensive Brand Identity Book'],
                    ['num' => 'Figma', 'label' => 'Tokenized Digital Design System Handover'],
                ],
                'pills' => [
                    'Bespoke Logo Marks', 'Corporate Brand Guidelines', 'Figma Component Systems',
                    'Bilingual Typography (Ar/En)', 'Company Profiles & Decks', 'Luxury Packaging & 3D'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • The Value of Prestige',
                    'title' => 'Why Superficial Branding Fails in the UAE',
                    'desc' => 'Dubai is a global showcase of premier luxury, finance, and enterprise. A cheap 5-dollar logo or mismatched color palette immediately signals low credibility to local clients, banks, and government authorities.',
                    'cards' => [
                        [
                            'icon' => '👑',
                            'title' => 'Perceived Value & Premium Pricing',
                            'desc' => 'Brands with immaculate visual identities command 3x to 5x higher project fees in Dubai. Premium branding shifts your business from a commodity competing on price to a prestigious market authority.',
                            'metric' => 'Command Premium Pricing'
                        ],
                        [
                            'icon' => '🖋️',
                            'title' => 'Bilingual Arabic Calligraphic Nuance',
                            'desc' => 'Integrating Arabic script into a global corporate identity requires authentic mastery of Diwani, Kufic, or modern geometric typography. We harmonize Latin and Arabic marks into one seamless symbol.',
                            'metric' => 'Authentic GCC Harmony'
                        ],
                        [
                            'icon' => '📖',
                            'title' => 'Corporate Company Profiles That Close',
                            'desc' => 'In Dubai B2B tenders, your PDF company profile is reviewed before you ever get a meeting. We craft editorial-grade company profiles and pitch decks that position you as the definitive market leader.',
                            'metric' => 'High-Impact Tender Decks'
                        ],
                        [
                            'icon' => '🎨',
                            'title' => 'Full Digital Token Ecosystem',
                            'desc' => 'A logo in isolation is useless. We deliver complete Figma design systems with standardized color tokens, typographic scales, iconography sets, and digital mockups ready for web and marketing.',
                            'metric' => 'Complete Brand Cohesion'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / STRATEGY',
                        'badge' => 'DNA',
                        'title' => 'Brand Strategy & Market Positioning',
                        'desc' => 'We define your brand essence, value proposition, core messaging pillars, and competitor differentiation in the Dubai and Middle Eastern market.',
                        'deliverables' => [
                            'Brand mission, vision, and core purpose articulation',
                            'Competitive positioning audit against top UAE category rivals',
                            'Tone of voice guidelines and bilingual brand personality matrix',
                            'Target buyer persona emotional hook definitions'
                        ],
                        'impact' => 'Unshakeable Positioning'
                    ],
                    [
                        'num' => '02 / IDENTITY',
                        'badge' => 'Vector Art',
                        'title' => 'Iconic Logo Design & Wordmarks',
                        'desc' => 'We craft timeless, memorable logo marks and custom typographic wordmarks that look stunning across billboards, smartphone screens, and business cards.',
                        'deliverables' => [
                            '3 distinct creative concept directions with rationale',
                            'Bilingual Latin and Arabic typography pairing and calligraphic harmony',
                            'Primary, secondary, horizontal, and favicon logo variations',
                            'Full vector file delivery in AI, EPS, SVG, and high-res PNG'
                        ],
                        'impact' => 'Timeless Visual Icon'
                    ],
                    [
                        'num' => '03 / GUIDELINES',
                        'badge' => 'Standardization',
                        'title' => 'Comprehensive 60-Page Brand Guidelines Book',
                        'desc' => 'A definitive corporate handbook detailing exact color codes (HEX, RGB, CMYK, Pantone), clear space rules, incorrect usage, and typography hierarchies.',
                        'deliverables' => [
                            'Complete color theory palette with primary, secondary, and accent tints',
                            'Editorial typography hierarchy for print, web, and presentation slides',
                            'Graphic motifs, pattern libraries, and photographic art direction',
                            'Exclusion zones, minimum sizing, and brand misuse prevention rules'
                        ],
                        'impact' => '100% Brand Consistency'
                    ],
                    [
                        'num' => '04 / STATIONERY',
                        'badge' => 'Corporate Collateral',
                        'title' => 'Corporate Stationery & Business Collateral',
                        'desc' => 'High-end business cards with spot UV/foil stamping specifications, corporate letterheads, branded envelopes, presentation folders, and email signatures.',
                        'deliverables' => [
                            'Luxury business card design with exact printing specs for Dubai print houses',
                            'Corporate letterhead and formal invoice templates in Word/PDF',
                            'Branded presentation folder, ID badges, and corporate lanyard designs',
                            'Clickable HTML email signatures for your executive leadership team'
                        ],
                        'impact' => 'Flawless Real-World Presence'
                    ],
                    [
                        'num' => '05 / PROFILES',
                        'badge' => 'Tenders',
                        'title' => 'Editorial Corporate Profiles & Pitch Decks',
                        'desc' => 'We write, structure, and design captivating 16-to-32 page corporate company profiles and PowerPoint/Keynote pitch decks designed to win enterprise tenders.',
                        'deliverables' => [
                            'High-impact editorial copywriting highlighting company achievements',
                            'Infographic diagrams explaining complex business services and stats',
                            'Interactive digital PDF format with clickable table of contents and links',
                            'Master editable PowerPoint/Keynote template for internal presentations'
                        ],
                        'impact' => 'Tender-Winning Credibility'
                    ],
                    [
                        'num' => '06 / PACKAGING',
                        'badge' => '3D & Physical',
                        'title' => 'Product Packaging & 3D Environmental Mockups',
                        'desc' => 'From luxury perfume boxes and cosmetic containers to corporate office signage and vehicle fleet wraps, we turn your brand into tangible art.',
                        'deliverables' => [
                            'Dieline structural packaging design and technical finish specs',
                            'Photorealistic 3D product renders for eCommerce and investor pitches',
                            'Corporate office interior signage and acrylic wall branding',
                            'Vehicle wrap layouts and trade exhibition booth graphics'
                        ],
                        'impact' => 'Commanding Shelf Presence'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'How long does a complete corporate branding project take in Dubai?',
                        'a' => 'A complete corporate brand identity project typically takes 3 to 5 weeks. This covers initial research, concept presentations, revisions, brand book development, stationery design, and company profile creation.'
                    ],
                    [
                        'q' => 'Can you design bilingual Arabic and English logos?',
                        'a' => 'Yes. Bilingual branding is one of our flagship specialties. We ensure the Arabic typography and English mark feel like twin expressions of the same aesthetic spirit, rather than an awkward afterthought.'
                    ],
                    [
                        'q' => 'What formats do we receive for our new logo and brand assets?',
                        'a' => 'You receive complete vector master files (Adobe Illustrator .AI, .EPS, .SVG, .PDF) for high-resolution commercial printing, alongside web-optimized PNG, WebP, and JPEG formats, plus an organized Figma design library.'
                    ],
                    [
                        'q' => 'What if we already have an existing logo and only need a brand refresh?',
                        'a' => 'We frequently conduct brand evolution and modernization projects. We modernize outdated logo marks, refine typography, introduce sophisticated color palettes, and create comprehensive guidelines while preserving existing brand equity.'
                    ],
                    [
                        'q' => 'Do you provide print management and printing partner recommendations in Dubai?',
                        'a' => 'Yes. We prepare print-ready files with exact bleed marks, color profiles, spot-UV coordinates, and foil embossing layers, and can coordinate directly with trusted luxury print houses in Dubai.'
                    ],
                    [
                        'q' => 'Who owns the copyright to the completed brand designs?',
                        'a' => 'You own 100% full intellectual property and commercial copyright for all final approved logos, designs, and brand collateral upon project handover.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Target Corporate Deliverables Needed',
                    'min1' => 3, 'max1' => 20, 'step1' => 1, 'val1' => 8, 'unit1' => ' Assets',
                    'label2' => 'Average Target Project / Contract Size',
                    'min2' => 5000, 'max2' => 200000, 'step2' => 5000, 'val2' => 35000, 'unit2' => 'AED ',
                    'label3' => 'Estimated Close Rate Lift via Premium Image',
                    'min3' => 10, 'max3' => 50, 'step3' => 5, 'val3' => 25, 'unit3' => '%',
                    'res_title' => 'Projected Brand Equity Commercial ROI',
                    'res1_label' => 'Perceived Value Multiplier Impact',
                    'res2_label' => 'Projected Additional Tender Win Value',
                    'res3_label' => 'Lifetime Brand Capital Asset Value',
                ],
                'case_study_categories' => ['corporate', 'web-dev'],
                'blog_categories' => ['branding', 'growth-strategy'],
            ],

            'video-production-dubai' => [
                'slug' => 'video-production-dubai',
                'num' => '10 / VIDEO',
                'category_badge' => 'High Impact',
                'title' => 'Corporate Video Production & Video Advertising Dubai',
                'hero_title' => 'Cinematic Corporate Video &amp; High-ROI <span class="highlight-text">Video Ads in Dubai</span>',
                'meta_title' => 'Corporate Video Production Dubai | Video Advertising Agency - Zenerom UAE',
                'meta_desc' => 'Transform brand perception and drive commercial sales with Dubai\'s premier video advertising agency. Cinematic corporate films, social media reels, 3D motion graphics, and paid video ad production across the UAE.',
                'hero_desc' => 'Capture attention in the first 3 seconds and convert viewers into loyal clients. We produce cinematic corporate brand films, high-converting social media reels, 3D motion graphics, and paid video ad cuts engineered specifically for high engagement and commercial return.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Cinema Directors & Video Producers Active',
                'primary_cta' => 'Schedule Video Production Concept Briefing',
                'whatsapp_text' => 'Hello Zenerom Video Production Desk, I have a video project to discuss in Dubai.',
                'stats' => [
                    ['num' => '15M+', 'label' => 'Total Video Views Generated Across UAE'],
                    ['num' => '+185%', 'label' => 'Higher Conversion vs Static Image Ads'],
                    ['num' => '4K UHD', 'label' => 'Cinema-Grade Camera & Drone Equipment'],
                    ['num' => '<3 Sec', 'label' => 'Engineered Hook Retention Rate'],
                ],
                'pills' => [
                    'Commercial Corporate Shoots', '3D Motion Graphics & Animation', 'Hook-Optimized Social Cuts',
                    'Multi-Format (9:16, 16:9, 1:1)', 'Drone Aerial Cinematography', 'Color Grading & Sound Design'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • Visual Storytelling',
                    'title' => 'Why Static Content Is Failing in Dubai’s Digital Feeds',
                    'desc' => 'Modern consumers in Dubai scroll through dozens of advertisements daily. Static images are tuned out within milliseconds. High-production video is the only medium that creates an instant emotional bond and commands undivided attention.',
                    'cards' => [
                        [
                            'icon' => '⚡',
                            'title' => 'The Critical 3-Second Hook',
                            'desc' => '65% of viewers who watch the first 3 seconds of a video will continue watching for at least 30 seconds. We script psychological hooks that immediately disrupt the feed scroll and retain viewers.',
                            'metric' => '72% Scroll-Stop Rate'
                        ],
                        [
                            'icon' => '🚁',
                            'title' => 'Cinematic Prestige & Aerial Drone',
                            'desc' => 'In a city built on architectural ambition, drone cinematography and cinema lenses (Sony FX6, RED) give your brand film the grandeur it deserves in international presentations.',
                            'metric' => '4K Cinema Fidelity'
                        ],
                        [
                            'icon' => '📈',
                            'title' => 'Direct Response Video Ads',
                            'desc' => 'We don’t just create pretty art; we engineer commercial video ads designed to generate leads, bookings, and sales with clear on-screen calls to action and subtitles.',
                            'metric' => '+185% Ad Conversion'
                        ],
                        [
                            'icon' => '📐',
                            'title' => 'Multi-Format Omnichannel Delivery',
                            'desc' => 'Every shoot is formatted simultaneously for 16:9 website hero banners and YouTube, 9:16 vertical reels for Instagram/TikTok, and 1:1 square feeds for LinkedIn.',
                            'metric' => '1 Shoot, 5 Distribution Formats'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / SCRIPTING',
                        'badge' => 'Pre-Production',
                        'title' => 'Strategic Scriptwriting & Storyboarding',
                        'desc' => 'We define the narrative arc, write bilingual voiceover scripts, and create visual frame-by-frame storyboards before a single camera is unpacked.',
                        'deliverables' => [
                            'Core concept ideation aligned with commercial objectives',
                            'Bilingual voiceover scriptwriting (Arabic and English)',
                            'Visual frame-by-frame storyboard and mood board creation',
                            'Location scouting and filming permit clearance in Dubai'
                        ],
                        'impact' => 'Structured Story Arc'
                    ],
                    [
                        'num' => '02 / FILMING',
                        'badge' => 'Production',
                        'title' => 'Cinema-Grade On-Location Filming',
                        'desc' => 'Our professional crew brings cinema-grade 4K/6K cameras, cinematic lighting rigs, wireless audio, and licensed drone pilots directly to your Dubai premises.',
                        'deliverables' => [
                            'Full cinema camera package (Sony FX series / RED) with prime lenses',
                            'Three-point cinematic lighting setups and boom/lavalier audio capture',
                            'Licensed GCAA drone aerial cinematography across Dubai/UAE',
                            'On-camera director coaching for leadership and team interviews'
                        ],
                        'impact' => 'Hollywood-Grade Polish'
                    ],
                    [
                        'num' => '03 / POST-PROD',
                        'badge' => 'Editing',
                        'title' => 'High-Velocity Post-Production & Color Grading',
                        'desc' => 'Dynamic editing, cinema color grading in DaVinci Resolve, custom sound effects, and licensed musical score syncing that elevate the final film.',
                        'deliverables' => [
                            'Pacing-driven dynamic video editing in DaVinci Resolve / Premiere',
                            'Professional cinematic color grading matching corporate brand tones',
                            'Bilingual dynamic animated subtitle typography',
                            'Sound design, audio leveling, and licensed commercial music tracks'
                        ],
                        'impact' => 'Emotional Resonance'
                    ],
                    [
                        'num' => '04 / 3D & MOTION',
                        'badge' => 'CGI',
                        'title' => '3D Motion Graphics & Explainer Animation',
                        'desc' => 'When physical filming is impossible or concepts are abstract, our 3D artists build photorealistic product models, HUD graphics, and animated explainer videos.',
                        'deliverables' => [
                            '3D product modeling, texturing, and realistic lighting in Cinema 4D/Blender',
                            '2D vector kinetic typography and corporate explainer animations',
                            'Animated logo stingers and video intro/outro branding cards',
                            'HUD futuristic interface overlays for tech and financial services'
                        ],
                        'impact' => 'Simplified Complex Concepts'
                    ],
                    [
                        'num' => '05 / SOCIAL CUTS',
                        'badge' => 'Social First',
                        'title' => 'Social Reel & Ad Micro-Cuts',
                        'desc' => 'We extract dozens of high-energy 15-second and 30-second vertical reels from your master footage, perfectly formatted for Instagram, TikTok, and YouTube Shorts.',
                        'deliverables' => [
                            'Vertical 9:16 aspect ratio framing for mobile consumption',
                            'Fast-paced opening hooks designed to maximize watch time',
                            'Clear end-screen conversion calls to action and WhatsApp prompts',
                            'Batch delivery of 10 to 20 micro-videos for monthly content calendars'
                        ],
                        'impact' => 'Endless Social Content'
                    ],
                    [
                        'num' => '06 / CAMPAIGNS',
                        'badge' => 'Distribution',
                        'title' => 'YouTube & Paid Video Ad Deployment',
                        'desc' => 'Video without distribution is unseen art. We launch and optimize paid video campaigns across YouTube In-Stream, Meta, and LinkedIn.',
                        'deliverables' => [
                            'YouTube Skippable & Non-Skippable in-stream ad campaign setup',
                            'Meta Ads video view and conversion optimization funnels',
                            'Video viewer remarketing audience creation for subsequent sales ads',
                            'Performance analytics tracking view completion rates and cost per view'
                        ],
                        'impact' => 'Maximized Audience Reach'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'How much does corporate video production cost in Dubai?',
                        'a' => 'Costs vary based on the number of shoot days, locations, crew size, drone permits, and 3D motion graphics needs. A standard social video shoot package typically ranges from AED 6,000 to AED 15,000, while multi-day cinema brand films range higher. We provide transparent, itemized quotes with zero hidden fees.'
                    ],
                    [
                        'q' => 'Do you handle Dubai filming permits and drone clearances?',
                        'a' => 'Yes. We manage required filming permits and GCAA drone operation clearances across public and private locations in Dubai and Abu Dhabi.'
                    ],
                    [
                        'q' => 'How long does the entire video production process take?',
                        'a' => 'Pre-production (scripting and storyboarding) takes 3 to 5 business days. Filming is completed in 1 to 2 days. Post-production and color grading take 5 to 7 business days, with final delivery typically within 2 weeks from kickoff.'
                    ],
                    [
                        'q' => 'Can you provide bilingual voiceover artists (Arabic and English)?',
                        'a' => 'Yes. We work with a roster of professional native Arabic (Gulf, Levantine, Egyptian dialects) and English (British, American, International accents) voiceover artists recorded in professional sound studios.'
                    ],
                    [
                        'q' => 'What video deliverables do we receive upon project completion?',
                        'a' => 'You receive master 4K UHD video files, compressed 1080p web versions, vertical 9:16 cuts for Reels/TikTok, square 1:1 cuts, and clean versions without text for international usage.'
                    ],
                    [
                        'q' => 'Can video production be integrated with our paid ads strategy?',
                        'a' => 'Yes! That is our primary differentiator. Because Zenerom is both a creative production house and a performance marketing agency, we engineer videos specifically designed to achieve low cost-per-lead and high ROAS on Meta and YouTube.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Planned Video Content Quantity',
                    'min1' => 1, 'max1' => 15, 'step1' => 1, 'val1' => 4, 'unit1' => ' Videos',
                    'label2' => 'Target Paid Video Ad Media Spend',
                    'min2' => 2000, 'max2' => 50000, 'step2' => 1000, 'val2' => 8000, 'unit2' => 'AED ',
                    'label3' => 'Estimated Video View Rate Lift',
                    'min3' => 20, 'max3' => 80, 'step3' => 5, 'val3' => 45, 'unit3' => '%',
                    'res_title' => 'Projected Video Engagement & Reach Velocity',
                    'res1_label' => 'Projected Total High-Quality Views',
                    'res2_label' => 'Estimated Inbound Inquiries Generated',
                    'res3_label' => 'Projected Commercial Brand Recall Impact',
                ],
                'case_study_categories' => ['corporate', 'performance-ads'],
                'blog_categories' => ['performance-ads', 'social-media', 'branding'],
            ],

            'zoho-implementation-dubai' => [
                'slug' => 'zoho-implementation-dubai',
                'num' => '11 / CRM',
                'category_badge' => 'Process Scale',
                'title' => 'Zoho CRM Implementation & Automation Services Dubai',
                'hero_title' => 'Enterprise Zoho CRM Implementation &amp; <span class="highlight-text">Automation in Dubai</span>',
                'meta_title' => 'Zoho Implementation Services Dubai | Certified Zoho Consulting UAE - Zenerom',
                'meta_desc' => 'Streamline business operations with expert Zoho implementation services in Dubai. Certified Zoho One, Zoho CRM, Zoho Books VAT automation, custom Deluge scripts, and WhatsApp API integration.',
                'hero_desc' => 'Eliminate lost leads and manual administrative drag. As a premier Zoho consulting company in the UAE, we implement, customize, and automate Zoho CRM, Zoho Books, and Zoho One with custom Deluge scripts, instant WhatsApp notification routing, and seamless lead tracking.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Certified Zoho Consultants & Deluge Engineers Active',
                'primary_cta' => 'Claim Free Zoho CRM Architecture Audit',
                'whatsapp_text' => 'Hello Zenerom Zoho Desk, I am interested in Zoho CRM & Automation in Dubai.',
                'stats' => [
                    ['num' => '90%', 'label' => 'Reduction in Lead Response Time (Under 3 Min)'],
                    ['num' => 'Zero', 'label' => 'Lead Leakage Across Inbound Commercial Funnels'],
                    ['num' => '120+', 'label' => 'Zoho One Workflows Successfully Deployed'],
                    ['num' => '100%', 'label' => 'Custom Deluge Scripting & WhatsApp Webhook Sync'],
                ],
                'pills' => [
                    'Zoho One & CRM Architecture', 'Automated Lead Assignment', 'WhatsApp Cloud API Sync',
                    'Zoho Books Invoicing & VAT', 'Custom Deluge Scripts', 'Live Executive BI Dashboards'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • Operational Scalability',
                    'title' => 'Why Off-the-Shelf CRM Setups Fail UAE Sales Teams',
                    'desc' => 'Most businesses sign up for Zoho CRM and only use 10% of its capability. Without custom sales pipelines, automated WhatsApp lead distribution, and UAE VAT invoice syncing, sales reps revert to chaotic WhatsApp chats and spreadsheets.',
                    'cards' => [
                        [
                            'icon' => '⚡',
                            'title' => 'Instant Lead Distribution',
                            'desc' => 'Leads that sit idle in inboxes get cold immediately. We build automated round-robin assignment rules that notify sales agents on WhatsApp within 30 seconds of form submission.',
                            'metric' => 'Under 30-Second Lead Handoff'
                        ],
                        [
                            'icon' => '📱',
                            'title' => 'Native WhatsApp Cloud API Sync',
                            'desc' => 'UAE sales happen on WhatsApp. We integrate WhatsApp directly into Zoho CRM so reps can chat from the CRM screen with conversations logged automatically.',
                            'metric' => '100% Message Logging'
                        ],
                        [
                            'icon' => '📊',
                            'title' => 'Zoho Books & FTA VAT Alignment',
                            'desc' => 'Bridge the gap between closed deals and accounting. When a deal reaches "Closed-Won", Zoho Books automatically generates compliant UAE 5% VAT invoices.',
                            'metric' => 'Zero Billing Delays'
                        ],
                        [
                            'icon' => '📈',
                            'title' => 'Executive Analytics & BI Reports',
                            'desc' => 'Give founders and sales directors real-time visibility into pipeline velocity, agent conversion rates, and revenue projections without manually exporting spreadsheets.',
                            'metric' => 'Real-Time Pipeline BI'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / BLUEPRINT',
                        'badge' => 'Audit',
                        'title' => 'Business Process Mapping & Pipeline Design',
                        'desc' => 'We analyze your sales cycle, customer touchpoints, and handover bottlenecks to architect custom Zoho CRM pipeline stages matching your exact business model.',
                        'deliverables' => [
                            'Comprehensive workflow mapping of lead-to-deal lifecycle',
                            'Custom module and field definitions tailored for Dubai real estate, B2B, or retail',
                            'Sales stage criteria and required validation rules to enforce data hygiene',
                            'Historical data cleanup and legacy CRM migration roadmap'
                        ],
                        'impact' => 'Structured Sales Methodology'
                    ],
                    [
                        'num' => '02 / SETUP',
                        'badge' => 'Deployment',
                        'title' => 'Zoho CRM & Zoho One Full Deployment',
                        'desc' => 'End-to-end configuration of Zoho CRM, user security roles, territory management, and integration with the wider Zoho One application ecosystem.',
                        'deliverables' => [
                            'Role-based permissions and hierarchical data access controls',
                            'Territory management (Dubai, Abu Dhabi, Northern Emirates, GCC)',
                            'Web-to-Lead forms with automatic UTM tracking capture',
                            'Email inbox two-way synchronization (Google Workspace / Office 365)'
                        ],
                        'impact' => 'Flawless System Adoption'
                    ],
                    [
                        'num' => '03 / DELUGE',
                        'badge' => 'Custom Code',
                        'title' => 'Custom Deluge Scripting & Workflow Rules',
                        'desc' => 'When native Zoho settings fall short, our certified Deluge developers write custom scripts, webhooks, and functions to automate complex business calculations.',
                        'deliverables' => [
                            'Custom Deluge automation scripts for complex pricing and commissions',
                            'Automated webhook triggers to external databases and ERPs',
                            'Scheduled functions for automated follow-up reminders and task escalations',
                            'Blueprint process enforcement ensuring sales reps follow required steps'
                        ],
                        'impact' => 'Zero Manual Data Entry'
                    ],
                    [
                        'num' => '04 / WHATSAPP',
                        'badge' => 'Communication',
                        'title' => 'WhatsApp Cloud API & Telephony Integration',
                        'desc' => 'Connect official WhatsApp Business Cloud API and cloud PBX phone systems directly into Zoho CRM for 1-click dialing and automated chat logging.',
                        'deliverables' => [
                            'Official Meta WhatsApp Business Cloud API verification and registration',
                            'Automated template messaging (welcome, appointment reminder, proposal sent)',
                            '1-click call recording and logging with local UAE telephony providers',
                            'Omnichannel inbox view consolidating WhatsApp, email, and live chat'
                        ],
                        'impact' => 'Instant Client Connection'
                    ],
                    [
                        'num' => '05 / FINANCE',
                        'badge' => 'Zoho Books',
                        'title' => 'Zoho Books & UAE VAT Billing Automation',
                        'desc' => 'Seamless synchronization between CRM sales deals and Zoho Books accounting, ensuring automatic tax invoice generation compliant with UAE Federal Tax Authority.',
                        'deliverables' => [
                            'Zoho Books chart of accounts setup and 5% UAE VAT configuration',
                            'Automated estimate-to-invoice conversion when CRM deals are won',
                            'Payment gateway integration (Stripe, Telr) for 1-click invoice payments',
                            'Automated payment receipt generation and overdue reminder sequences'
                        ],
                        'impact' => '100% Tax & Invoicing Compliance'
                    ],
                    [
                        'num' => '06 / TRAINING',
                        'badge' => 'Enablement',
                        'title' => 'Staff Training & Ongoing SLA Support',
                        'desc' => 'A CRM is only as good as its user adoption. We conduct hands-on training workshops for your Dubai sales team backed by ongoing technical maintenance.',
                        'deliverables' => [
                            'In-person training sessions at your Dubai office or our Burjuman flagship',
                            'Custom screen-recorded video SOPs for onboarding future employees',
                            'Monthly system health checks and workflow optimization reviews',
                            'Direct WhatsApp and ticketing support channel with certified Zoho architects'
                        ],
                        'impact' => '95%+ User Adoption Rate'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'What is the advantage of choosing Zoho One over standalone Zoho CRM?',
                        'a' => 'Zoho One gives your business access to 45+ enterprise applications (CRM, Books for accounting, Desk for customer support, Sign for digital contracts, Creator for custom apps) under one unified per-employee license, eliminating separate third-party software subscriptions.'
                    ],
                    [
                        'q' => 'Can you migrate our data from our existing CRM (HubSpot, Salesforce, Excel)?',
                        'a' => 'Yes. We conduct complete data sanitization, field mapping, and historical migration from Salesforce, HubSpot, Bitrix24, Pipedrive, or Excel spreadsheets with zero data loss.'
                    ],
                    [
                        'q' => 'Can Zoho CRM integrate directly with our WordPress / custom website forms?',
                        'a' => 'Yes. We build secure API webhooks that capture leads from website forms, Google Ads, Meta Ads, and WhatsApp, passing them instantly into Zoho CRM with complete campaign attribution data.'
                    ],
                    [
                        'q' => 'How does the WhatsApp integration work within Zoho CRM?',
                        'a' => 'Through official WhatsApp Cloud API integration, incoming WhatsApp messages automatically create new leads or link to existing contacts. Sales reps can view chat history, send approved WhatsApp templates, and receive alerts inside Zoho.'
                    ],
                    [
                        'q' => 'How long does a typical Zoho CRM implementation take in Dubai?',
                        'a' => 'A standard Zoho CRM setup with workflow automation typically takes 2 to 4 weeks. Full enterprise Zoho One implementations with Zoho Books and custom Deluge scripting take 4 to 8 weeks.'
                    ],
                    [
                        'q' => 'Do you provide post-implementation training and ongoing support?',
                        'a' => 'Yes. We provide comprehensive hands-on training for both sales reps and management, custom video documentation, and ongoing monthly SLA support for workflow modifications and technical support.'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Active Sales Representatives / Agents',
                    'min1' => 2, 'max1' => 60, 'step1' => 1, 'val1' => 8, 'unit1' => ' Reps',
                    'label2' => 'Monthly Inbound Leads Received',
                    'min2' => 50, 'max2' => 2500, 'step2' => 50, 'val2' => 350, 'unit2' => ' Leads',
                    'label3' => 'Estimated Lead Slippage Without Automation',
                    'min3' => 10, 'max3' => 50, 'step3' => 5, 'val3' => 25, 'unit3' => '%',
                    'res_title' => 'Projected Pipeline Acceleration & Recovery',
                    'res1_label' => 'Monthly Leads Saved from Slippage',
                    'res2_label' => 'Estimated Additional Closed Deals',
                    'res3_label' => 'Projected Recovered Annual Revenue',
                ],
                'case_study_categories' => ['industrial', 'corporate'],
                'blog_categories' => ['software-dev', 'growth-strategy', 'digital-marketing'],
            ],

            'it-outsourcing-dubai' => [
                'slug' => 'it-outsourcing-dubai',
                'num' => '12 / TALENT',
                'category_badge' => 'Zero Overhead',
                'title' => 'IT & Developer Outsourcing Company in Dubai',
                'hero_title' => 'Deploy Vetted Tech Squads &amp; <span class="highlight-text">Developers in Dubai Without Overhead</span>',
                'meta_title' => 'IT Outsourcing Company Dubai | Dedicated Developers - Zenerom UAE',
                'meta_desc' => 'Scale your tech team instantly with Dubai\'s premier IT outsourcing company. Dedicated pre-vetted full-time developers (Laravel, React, Flutter, WordPress), strict SLAs, and zero visa or severance liabilities.',
                'hero_desc' => 'Scale your engineering and marketing capabilities in 48 hours. We provide pre-vetted full-time senior developers (Laravel, Node, React, Flutter, WordPress) and digital marketing specialists managed under strict SLAs with zero UAE visa, insurance, or severance liabilities.',
                'status_ribbon' => 'Burjuman Business Tower Flagship • Technical Staffing & Resource Directors Active',
                'primary_cta' => 'Request Developer Profiles & Rates Card',
                'whatsapp_text' => 'Hello Zenerom Tech Squad Desk, I am looking to hire dedicated developers in Dubai.',
                'stats' => [
                    ['num' => '48-Hour', 'label' => 'Dedicated Resource Deployment SLA'],
                    ['num' => '60%', 'label' => 'Average Cost Savings vs In-House UAE Hiring'],
                    ['num' => 'Zero', 'label' => 'UAE Visa, Insurance, or Gratuity Liabilities'],
                    ['num' => 'Top 3%', 'label' => 'Pre-Vetted Senior Engineering Talent'],
                ],
                'pills' => [
                    'Dedicated Full-Time Developers', 'Strict SLA Guarantees', 'Daily Standups & Jira Sync',
                    'Zero Hiring Liabilities', 'Flexible Monthly Scale', 'Timezone Aligned (GST / GMT+4)'
                ],
                'market_context' => [
                    'tag' => 'Market Reality • Resource Economics',
                    'title' => 'Why Traditional In-House Tech Hiring Stalls in the UAE',
                    'desc' => 'Recruiting in-house developers in Dubai involves massive upfront recruiter fees, high visa costs, mandatory health insurance, end-of-service gratuity liabilities, and months of search time with zero performance guarantees.',
                    'cards' => [
                        [
                            'icon' => '💸',
                            'title' => 'Zero Visa & Gratuity Liability',
                            'desc' => 'Save tens of thousands of dirhams. We absorb all employee onboarding, UAE visas, health insurance, paid leaves, and end-of-service severance liabilities under a simple, tax-deductible monthly invoice.',
                            'metric' => 'Zero Legal Overhead'
                        ],
                        [
                            'icon' => '⚡',
                            'title' => 'Deploy in 48 Hours, Not 3 Months',
                            'desc' => 'Skip the agonizing 90-day hiring cycle. Choose from our bench of pre-vetted, English-fluent senior developers and have them writing production code in your GitHub repository within 48 hours.',
                            'metric' => '48-Hour Rapid Deployment'
                        ],
                        [
                            'icon' => '🔄',
                            'title' => 'Flexibility to Scale Up or Down',
                            'desc' => 'Need 3 developers for a 6-month product build? Scale up instantly. Need to pause after deployment? Zero messy labor disputes or severance negotiations. Complete month-to-month flexibility.',
                            'metric' => 'Month-to-Month Agile Scale'
                        ],
                        [
                            'icon' => '🎯',
                            'title' => 'Direct Daily Control & Standups',
                            'desc' => 'Your dedicated developers work exclusively on your project. They report to your project manager via Slack, attend your daily Scrum standups, and commit code directly into your repository.',
                            'metric' => '100% Dedicated to Your Vision'
                        ]
                    ]
                ],
                'pillars' => [
                    [
                        'num' => '01 / FULL-STACK',
                        'badge' => 'Web Dev',
                        'title' => 'Dedicated Laravel & PHP Developers',
                        'desc' => 'Deploy battle-tested senior backend engineers specializing in Laravel, PHP 8.3+, MySQL/PostgreSQL, Redis, and high-security API integrations.',
                        'deliverables' => [
                            'Pre-vetted senior developers with 5+ years commercial experience',
                            'Expertise in RESTful API engineering, caching, and database architecture',
                            'Daily code commits directly to your private GitHub/GitLab repository',
                            'Clean code following PSR standards with automated unit tests'
                        ],
                        'impact' => 'High-Velocity Backend Delivery'
                    ],
                    [
                        'num' => '02 / FRONTEND',
                        'badge' => 'Modern UI',
                        'title' => 'Dedicated React, Next.js & Vue Engineers',
                        'desc' => 'Hire top-tier frontend developers who turn Figma designs into pixel-perfect, lightning-fast web applications with clean component architectures.',
                        'deliverables' => [
                            'Fluid responsive UI development using Tailwind, React, and Next.js',
                            'State management mastery with Redux, Zustand, and React Query',
                            'Sub-second page rendering and Web Vitals performance tuning',
                            'Bilingual English and Arabic (RTL) interface engineering'
                        ],
                        'impact' => 'Flawless Frontend Execution'
                    ],
                    [
                        'num' => '03 / MOBILE',
                        'badge' => 'App Talent',
                        'title' => 'Dedicated Flutter & Mobile App Developers',
                        'desc' => 'Deploy experienced cross-platform and native mobile engineers capable of shipping high-rated apps to the Apple App Store and Google Play.',
                        'deliverables' => [
                            'Senior Flutter and React Native cross-platform developers',
                            'Deep experience with biometric security, push notifications, and payment SDKs',
                            'Hardware API integration: Camera, Bluetooth, GPS, and sensors',
                            'App Store and Play Store compliance and submission handling'
                        ],
                        'impact' => 'Rapid Mobile App Sprints'
                    ],
                    [
                        'num' => '04 / CMS',
                        'badge' => 'WordPress & Shopify',
                        'title' => 'Dedicated WordPress & Shopify Specialists',
                        'desc' => 'Scale your agency or enterprise publishing output with full-time CMS developers who build custom themes, manage plugins, and maintain security.',
                        'deliverables' => [
                            'Custom Gutenberg and Elementor theme engineering without bloat',
                            'Shopify Plus Liquid development and custom private app creation',
                            'Daily security patches, performance tuning, and database optimization',
                            'Seamless API integrations with ERPs, CRMs, and payment gateways'
                        ],
                        'impact' => 'Reliable Web Maintenance'
                    ],
                    [
                        'num' => '05 / SQUAD',
                        'badge' => 'Turnkey Team',
                        'title' => 'Turnkey Managed Tech Squads (Pod Model)',
                        'desc' => 'Hire a complete, cross-functional engineering pod: 1 Project Manager, 2 Full-Stack Developers, 1 UI/UX Designer, and 1 QA Tester managed under clear milestones.',
                        'deliverables' => [
                            'Complete dedicated product development squad ready to execute',
                            'English-fluent bilingual Project Manager running daily sprints',
                            'Rigorous Quality Assurance (QA) manual and automated testing',
                            'Weekly executive sprint progress demos and Jira burn-down charts'
                        ],
                        'impact' => 'Complete Turnkey Delivery'
                    ],
                    [
                        'num' => '06 / GOVERNANCE',
                        'badge' => 'Burjuman HQ',
                        'title' => 'Dubai Management & Replacement Guarantee',
                        'desc' => 'All talent is governed under legal UAE contracts by Zenerom at our Burjuman Tower flagship, with an unconditional free 7-day replacement guarantee.',
                        'deliverables' => [
                            'Legal UAE service contracts with non-disclosure agreements (NDA)',
                            'Timezone aligned with Dubai working hours (GST / GMT+4)',
                            'Unconditional free developer replacement guarantee within 48 hours',
                            'Bi-weekly strategic health check with your Zenerom Account Director'
                        ],
                        'impact' => 'Zero Operational Risk'
                    ]
                ],
                'faqs' => [
                    [
                        'q' => 'How does IT outsourcing with Zenerom work in Dubai?',
                        'a' => 'You tell us the technical skills and seniority you need. We provide shortlisted candidate profiles and conduct technical interviews with your team. Once approved, the developer works exclusively for your company full-time (160+ hours/month) reporting to your project manager, while Zenerom manages all payroll, benefits, and HR.'
                    ],
                    [
                        'q' => 'Can we interview the developers before committing?',
                        'a' => 'Yes, absolutely. You conduct live technical interviews and coding tests with shortlisted candidates. You only move forward with engineers who meet your technical and cultural standards.'
                    ],
                    [
                        'q' => 'What happens if a developer does not meet our expectations?',
                        'a' => 'We offer an unconditional 7-day trial period and a fast replacement guarantee. If a developer is not performing to your expectations, we replace them within 48 hours at zero additional cost.'
                    ],
                    [
                        'q' => 'What hours do the outsourced developers work?',
                        'a' => 'All developers work aligned with Gulf Standard Time (GST / GMT+4), matching standard UAE business hours (e.g. 9:00 AM to 6:00 PM). They attend your daily morning standups and collaborate in real-time.'
                    ],
                    [
                        'q' => 'What communication tools do the developers use?',
                        'a' => 'The developers integrate into your workflow tools: Slack, Microsoft Teams, Jira, Asana, Trello, GitHub, GitLab, and Zoom just like an in-house employee.'
                    ],
                    [
                        'q' => 'What are the cost savings compared to hiring in Dubai?',
                        'a' => 'Clients typically save between 50% to 65% compared to the total cost of hiring in-house in Dubai (when factoring in base salary, 20% recruiter placement fees, visa processing, annual flights, private medical insurance, and end-of-service gratuity).'
                    ]
                ],
                'calculator' => [
                    'label1' => 'Dedicated Developers Needed',
                    'min1' => 1, 'max1' => 10, 'step1' => 1, 'val1' => 2, 'unit1' => ' Developers',
                    'label2' => 'Estimated In-House UAE Monthly Cost / Dev',
                    'min2' => 12000, 'max2' => 45000, 'step2' => 1000, 'val2' => 22000, 'unit2' => 'AED ',
                    'label3' => 'Zenerom Outsourced Monthly Rate / Dev',
                    'min3' => 6500, 'max3' => 20000, 'step3' => 500, 'val3' => 9500, 'unit3' => 'AED ',
                    'res_title' => 'Projected Monthly & Annual Capital Savings',
                    'res1_label' => 'Net Monthly Hiring Cost Savings',
                    'res2_label' => 'Percentage Capital Saved',
                    'res3_label' => 'Projected Annual Capital Saved',
                ],
                'case_study_categories' => ['web-dev', 'industrial', 'corporate'],
                'blog_categories' => ['outsourcing', 'software-dev', 'growth-strategy'],
            ],
        ];
    }

    /**
     * Find a service by slug.
     */
    public static function findBySlug(string $slug): ?array
    {
        $all = self::all();
        return $all[$slug] ?? null;
    }

    /**
     * Get all service slugs.
     */
    public static function slugs(): array
    {
        return array_keys(self::all());
    }

    /**
     * Get complementary services for cross-linking.
     */
    public static function getRelated(string $currentSlug, int $limit = 4): array
    {
        $all = self::all();
        unset($all[$currentSlug]);
        return array_slice($all, 0, $limit);
    }
}
