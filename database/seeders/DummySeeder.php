<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Post;
use App\Models\Skill;
use App\Models\Setting;

class DummySeeder extends Seeder
{
    public function run(): void
    {
        // ============================================================
        // PROJECTS
        // ============================================================
        Project::create([
            'title' => 'E-Commerce Platform',
            'slug' => 'e-commerce-platform',
            'description' => 'A full-featured e-commerce platform built with Next.js and Laravel, featuring real-time inventory, payment gateway integration, and admin dashboard.',
            'content' => '<h2>Project Overview</h2><p>This e-commerce platform was built from the ground up to handle thousands of daily transactions. It features a headless architecture with Next.js for the storefront and Laravel as the backend API.</p><h2>Key Features</h2><ul><li>Real-time inventory management</li><li>Multiple payment gateway integration (Midtrans, Stripe)</li><li>Advanced product search and filtering</li><li>Customer review and rating system</li><li>Admin dashboard with analytics</li></ul><h2>Technical Challenges</h2><p>One of the main challenges was implementing real-time stock updates across multiple concurrent users. We solved this using database-level locking and WebSocket notifications.</p>',
            'image' => null,
            'tech_stack' => ['Next.js', 'Laravel', 'MySQL', 'Tailwind CSS', 'Midtrans'],
            'url' => 'https://example-shop.com',
            'github_url' => 'https://github.com/yakubfirman/ecommerce',
            'is_highlighted' => true,
        ]);

        Project::create([
            'title' => 'Fintech Dashboard',
            'slug' => 'fintech-dashboard',
            'description' => 'Modern financial technology dashboard with real-time data visualization, transaction monitoring, and comprehensive reporting tools.',
            'content' => '<h2>About This Project</h2><p>A comprehensive fintech dashboard designed for a financial startup. The dashboard provides real-time monitoring of transactions, user analytics, and financial reports.</p><h2>Features</h2><ul><li>Real-time transaction monitoring</li><li>Interactive charts and data visualization</li><li>Role-based access control</li><li>Automated report generation (PDF/Excel)</li><li>Dark mode support</li></ul>',
            'image' => null,
            'tech_stack' => ['React', 'TypeScript', 'Chart.js', 'Node.js', 'PostgreSQL'],
            'url' => 'https://fintech-demo.com',
            'github_url' => null,
            'is_highlighted' => true,
        ]);

        Project::create([
            'title' => 'SaaS Landing Page',
            'slug' => 'saas-landing-page',
            'description' => 'High-converting SaaS landing page with SEO optimization, achieving 95+ PageSpeed score and top 3 Google rankings.',
            'content' => '<h2>Project Goal</h2><p>The client needed a landing page that not only looked beautiful but also ranked high on Google for their target keywords. We delivered a page with a 98 PageSpeed Insight score.</p><h2>SEO Strategy</h2><ul><li>Semantic HTML5 structure</li><li>JSON-LD Schema Markup</li><li>Optimized Core Web Vitals (LCP, FID, CLS)</li><li>Server-Side Rendering for instant content delivery</li></ul>',
            'image' => null,
            'tech_stack' => ['Next.js', 'Tailwind CSS', 'Vercel', 'SEO'],
            'url' => 'https://saas-example.com',
            'github_url' => 'https://github.com/yakubfirman/saas-landing',
            'is_highlighted' => false,
        ]);

        Project::create([
            'title' => 'Restaurant POS System',
            'slug' => 'restaurant-pos-system',
            'description' => 'Point-of-sale system for restaurant chain with kitchen display, order management, and real-time reporting.',
            'content' => '<h2>Overview</h2><p>Built a custom POS system for a growing restaurant chain in Central Java. The system handles order management, kitchen display screens, and generates daily financial reports.</p><h2>Features</h2><ul><li>Touchscreen-optimized order interface</li><li>Kitchen display system (KDS)</li><li>Table management and reservation</li><li>Daily sales and inventory reports</li><li>Multi-branch support</li></ul>',
            'image' => null,
            'tech_stack' => ['Laravel', 'Vue.js', 'MySQL', 'Electron'],
            'url' => null,
            'github_url' => null,
            'is_highlighted' => true,
        ]);

        Project::create([
            'title' => 'Corporate Website Redesign',
            'slug' => 'corporate-website-redesign',
            'description' => 'Complete redesign of a corporate website with modern UI, improved UX, and comprehensive SEO overhaul resulting in 3x organic traffic.',
            'content' => '<h2>The Challenge</h2><p>The client\'s old website was outdated, slow, and barely visible on search engines. They needed a complete overhaul that would modernize their online presence and drive organic traffic.</p><h2>Results</h2><ul><li>3x increase in organic traffic within 3 months</li><li>PageSpeed score improved from 32 to 96</li><li>Bounce rate decreased by 45%</li><li>Average session duration increased by 60%</li></ul>',
            'image' => null,
            'tech_stack' => ['Next.js', 'Tailwind CSS', 'Laravel', 'SEO'],
            'url' => 'https://corporate-demo.com',
            'github_url' => null,
            'is_highlighted' => false,
        ]);

        // ============================================================
        // EXPERIENCES
        // ============================================================
        Experience::create([
            'title' => 'Full-stack Web Developer',
            'company' => 'Navyra Studio',
            'description' => 'Leading web development projects using Laravel and Next.js. Building headless CMS architectures, designing RESTful APIs, and optimizing web performance for various clients.',
            'start_date' => '2024-01-01',
            'end_date' => null,
            'is_current' => true,
        ]);

        Experience::create([
            'title' => 'Web Developer & SEO Specialist',
            'company' => 'Freelance',
            'description' => 'Delivering full-stack web solutions for SMEs across Indonesia. Handling end-to-end development from UI/UX design to deployment and SEO optimization.',
            'start_date' => '2022-06-01',
            'end_date' => '2023-12-31',
            'is_current' => false,
        ]);

        Experience::create([
            'title' => 'Speaker & Mentor',
            'company' => 'Tech Community Surakarta',
            'description' => 'Regular speaker at seminars and workshops on media literacy, frontend web development, and modern web technologies. Mentored junior developers in the local tech community.',
            'start_date' => '2023-01-01',
            'end_date' => null,
            'is_current' => true,
        ]);

        // ============================================================
        // EDUCATION
        // ============================================================
        Education::create([
            'degree' => 'Sarjana Komputer (S.Kom) - Teknik Informatika',
            'institution' => 'Universitas Duta Bangsa Surakarta',
            'description' => 'Focused on Software Engineering, Web Technologies, and Artificial Intelligence. Active in campus tech community.',
            'start_date' => '2022-09-01',
            'end_date' => '2026-07-01',
            'is_current' => false,
        ]);

        // ============================================================
        // BLOG POSTS
        // ============================================================
        Post::create([
            'title' => 'Getting Started with Headless CMS: Laravel + Next.js',
            'slug' => 'getting-started-headless-cms-laravel-nextjs',
            'excerpt' => 'Learn how to build a modern, scalable web architecture by separating your frontend and backend using Laravel as an API and Next.js as the UI layer.',
            'content' => '<h2>What is a Headless CMS?</h2><p>A headless CMS is a content management system that provides content through an API, without a built-in frontend layer. This gives developers the freedom to use any frontend framework while keeping the content management experience simple for editors.</p><h2>Why Laravel + Next.js?</h2><p>Laravel excels at building robust APIs with features like Eloquent ORM, built-in authentication (Sanctum), and an excellent ecosystem. Next.js, on the other hand, provides server-side rendering, static site generation, and an amazing developer experience.</p><h2>Setting Up Laravel as an API</h2><p>First, create a new Laravel project and configure it for API-only mode. Install Sanctum for authentication and set up your models and migrations.</p><pre><code>composer create-project laravel/laravel backend\ncd backend\nphp artisan install:api</code></pre><h2>Building the Next.js Frontend</h2><p>Create your Next.js app and set up the data fetching layer. Use Server Components for SEO-critical pages and Client Components for interactive elements.</p><pre><code>npx create-next-app@latest frontend\ncd frontend\nnpm run dev</code></pre><h2>Conclusion</h2><p>The headless approach gives you the best of both worlds: a powerful content management backend and a blazing-fast, SEO-optimized frontend. It\'s the architecture of the future.</p>',
            'cover_image' => null,
            'is_published' => true,
            'published_at' => '2026-06-10 10:00:00',
        ]);

        Post::create([
            'title' => 'SEO Best Practices for React & Next.js Applications',
            'slug' => 'seo-best-practices-react-nextjs',
            'excerpt' => 'A comprehensive guide on optimizing single-page applications for search engines, AI crawlers, and achieving top Core Web Vitals scores.',
            'content' => '<h2>The SEO Challenge with SPAs</h2><p>Single-page applications (SPAs) have historically struggled with SEO because search engine crawlers had difficulty indexing JavaScript-rendered content. Next.js solves this with Server-Side Rendering (SSR) and Static Site Generation (SSG).</p><h2>Essential Meta Tags</h2><p>Every page should have unique title tags, meta descriptions, and Open Graph tags. In Next.js, use the <code>generateMetadata</code> function for dynamic pages.</p><h2>JSON-LD Schema Markup</h2><p>Structured data helps search engines understand your content better. Implement Person, Article, and Organization schemas using JSON-LD format.</p><h2>Core Web Vitals</h2><p>Google uses Core Web Vitals as ranking signals. Focus on:</p><ul><li><strong>LCP (Largest Contentful Paint):</strong> Aim for under 2.5 seconds</li><li><strong>INP (Interaction to Next Paint):</strong> Aim for under 200ms</li><li><strong>CLS (Cumulative Layout Shift):</strong> Aim for under 0.1</li></ul><h2>AIO - AI Optimization</h2><p>As AI-powered search engines become more prevalent, consider creating a <code>llm.txt</code> file that provides a structured summary of your site for AI crawlers.</p>',
            'cover_image' => null,
            'is_published' => true,
            'published_at' => '2026-06-05 14:30:00',
        ]);

        Post::create([
            'title' => 'Building Beautiful UIs with GSAP Animations',
            'slug' => 'building-beautiful-uis-gsap-animations',
            'excerpt' => 'Discover how to use GSAP (GreenSock Animation Platform) to create smooth, professional animations that enhance user experience in your web applications.',
            'content' => '<h2>Why GSAP?</h2><p>GSAP is the gold standard for web animations. It\'s fast, reliable, and works across all major browsers. Unlike CSS animations, GSAP gives you precise control over complex animation sequences.</p><h2>Getting Started</h2><pre><code>npm install gsap\nimport gsap from "gsap";\nimport { ScrollTrigger } from "gsap/ScrollTrigger";\ngsap.registerPlugin(ScrollTrigger);</code></pre><h2>Scroll-Triggered Animations</h2><p>One of the most popular patterns is revealing elements as users scroll down the page. With ScrollTrigger, this becomes trivial:</p><pre><code>gsap.from(".section-reveal", {\n  y: 50,\n  opacity: 0,\n  duration: 0.8,\n  scrollTrigger: {\n    trigger: ".section-reveal",\n    start: "top 85%",\n  },\n});</code></pre><h2>Performance Tips</h2><ul><li>Always animate <code>transform</code> and <code>opacity</code> properties for GPU acceleration</li><li>Use <code>will-change</code> sparingly</li><li>Clean up animations in React with <code>gsap.context()</code></li></ul>',
            'cover_image' => null,
            'is_published' => true,
            'published_at' => '2026-05-28 09:00:00',
        ]);

        Post::create([
            'title' => 'Mengapa Headless CMS Adalah Masa Depan Web Development',
            'slug' => 'mengapa-headless-cms-masa-depan',
            'excerpt' => 'Eksplorasi mendalam tentang arsitektur Headless CMS dan mengapa semakin banyak perusahaan beralih dari CMS monolitik ke pendekatan decoupled.',
            'content' => '<h2>Evolusi CMS</h2><p>Dari WordPress monolitik hingga arsitektur headless modern, CMS terus berevolusi mengikuti kebutuhan developer dan bisnis yang semakin kompleks.</p><h2>Keunggulan Headless CMS</h2><ul><li><strong>Kecepatan:</strong> Frontend statis atau SSR jauh lebih cepat dari server-rendered PHP</li><li><strong>Fleksibilitas:</strong> Gunakan framework apapun untuk frontend</li><li><strong>Skalabilitas:</strong> Frontend dan backend bisa di-scale secara independen</li><li><strong>Keamanan:</strong> Surface area serangan lebih kecil karena frontend terpisah</li></ul><h2>Kapan Menggunakan Headless?</h2><p>Headless CMS cocok untuk proyek yang membutuhkan performa tinggi, multi-platform delivery, dan tim development yang mature. Untuk blog sederhana, WordPress masih bisa menjadi pilihan yang baik.</p>',
            'cover_image' => null,
            'is_published' => true,
            'published_at' => '2026-05-15 11:00:00',
        ]);

        // ============================================================
        // SKILLS
        // ============================================================
        $skills = [
            ['name' => 'JavaScript', 'category' => 'Frontend', 'proficiency' => 90],
            ['name' => 'TypeScript', 'category' => 'Frontend', 'proficiency' => 85],
            ['name' => 'PHP', 'category' => 'Backend', 'proficiency' => 95],
            ['name' => 'Python', 'category' => 'Backend', 'proficiency' => 80],
            ['name' => 'MySQL', 'category' => 'Database', 'proficiency' => 90],
            ['name' => 'PostgreSQL', 'category' => 'Database', 'proficiency' => 85],
            ['name' => 'ReactJs', 'category' => 'Frontend', 'proficiency' => 88],
            ['name' => 'NextJs', 'category' => 'Frontend', 'proficiency' => 85],
            ['name' => 'Laravel', 'category' => 'Backend', 'proficiency' => 95],
            ['name' => 'Codeigniter', 'category' => 'Backend', 'proficiency' => 85],
            ['name' => 'Flask', 'category' => 'Backend', 'proficiency' => 80],
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'name' => $skill['name'],
                'category' => $skill['category'],
                'icon_svg' => null,
                'proficiency' => $skill['proficiency'],
            ]);
        }

        // ============================================================
        // SETTINGS
        // ============================================================
        Setting::create(['key' => 'site_name', 'group' => 'General Info', 'value' => 'Yakub Firman Mustofa']);
        Setting::create(['key' => 'site_description', 'group' => 'General Info', 'value' => 'Web Developer & SEO Specialist based in Surakarta']);
        Setting::create(['key' => 'contact_email', 'group' => 'General Info', 'value' => 'contact@yakubfirman.id']);
        Setting::create(['key' => 'github_url', 'group' => 'General Info', 'value' => 'https://github.com/yakubfirman']);
        Setting::create(['key' => 'linkedin_url', 'group' => 'General Info', 'value' => 'https://linkedin.com/in/yakubfirman']);
        Setting::create(['key' => 'profile_image_url', 'group' => 'General Info', 'type' => 'string', 'value' => '/about.jpg']);
        Setting::create(['key' => 'header_image_url', 'group' => 'General Info', 'type' => 'string', 'value' => '/profile.jpg']);

        // Homepage Settings
        Setting::create(['key' => 'home_cta_title', 'group' => 'Homepage - CTA Section', 'type' => 'string', 'value' => "Let's Build Something Amazing Together"]);
        Setting::create(['key' => 'home_cta_description', 'group' => 'Homepage - CTA Section', 'type' => 'text', 'value' => 'Whether you need a full-stack web application, a boost in your search rankings, or a complete brand overhaul — I\'m here to help.']);

        Setting::create(['key' => 'home_about_heading', 'group' => 'Homepage - About Section', 'type' => 'string', 'value' => 'Turning complex problems into elegant solutions!']);
        Setting::create(['key' => 'home_about_text', 'group' => 'Homepage - About Section', 'type' => 'text', 'value' => "I'm a Computer Science graduate (2026) based in Surakarta, Central Java. I specialize in building robust Headless CMS architectures using Laravel and Next.js, bridging the gap between powerful backend logic and seamless frontend experiences.\n\nBeyond writing clean code, I'm deeply passionate about SEO and web performance. I also actively share my knowledge as a speaker at various tech seminars and workshops, focusing on frontend development and media literacy."]);
        
        // About Page Settings
        Setting::create(['key' => 'about_page_heading', 'group' => 'About Page - Main Section', 'type' => 'string', 'value' => 'Who I Am']);
        Setting::create(['key' => 'about_page_text', 'group' => 'About Page - Main Section', 'type' => 'text', 'value' => "I am Yakub Firman Mustofa, a passionate Web Developer and SEO Specialist based in Surakarta, Jawa Tengah. With a strong background in IT, I specialize in building high-performance web applications that not only look great but also rank well on search engines.\n\nMy approach combines technical excellence with strategic thinking. I believe in Headless CMS architectures, clean code, and user-centric design to deliver digital products that stand out."]);
    }
}
