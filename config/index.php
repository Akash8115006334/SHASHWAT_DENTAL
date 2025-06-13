<?php
define('APP_NAME', "Shashwat Dental");
define('OWNER_NAME', "Dr. Pooja Srivastava");
define('APP_LOGO', 'images/logo.png');
define('APP_LOGO2', 'assets/logo.jpg');
define("PRIMARY_PHONE_NUMBER", "+919958727075");
define("PRIMARY_EMAIL", "drpooja@shashwatdental.com");
define("PRIMARY_ADDRESS", "Shop No 01, First Floor, Hansraj Complex,Sector-31, Noida Uttar-Pradesh India 201301");
define("MAP", 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.707490851804!2d77.33661937934569!3d28.5785451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5dd6b87552d%3A0x8d0f77b7b75f4582!2sShashwat%20Dental%20%26%20Implant%20Centre!5e0!3m2!1sen!2sin!4v1727284169685!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade');
define("FACEBOOK", "https://www.facebook.com/profile.php?id=100070326759302&locale=ms_MY&_rdr");
define("INSTAGRAM", " https://www.instagram.com/shashwatdentalimplantclinic/");
define("TWITTER", "");
define("LINKEDIN", "#");
define("YOUTUBE", "#");
define("TIMING", "Mon To Sund 10:00AM to 08:00PM");

// create multiple carousals
$Carousal = [
    "one" => [
        "image" => "assets/img/carousal/ppc.jpg",
        "title" => "PPC Management",
        "description" => "Maximize your ROI with our expert PPC management services. We design and manage targeted Pay-Per-Click campaigns that drive high-quality traffic to your website, ensuring you get the best results for your advertising spend.",
        "link" => "#",
        "btn" => "Call Now",
    ],
    "two" => [
        "image" => "assets/img/carousal/advertise.jpg",
        "title" => "Best Advertisement Services",
        "description" => "Amplify your brand's reach and impact with our top-tier advertisement services. From targeted online ads to innovative campaign strategies, we provide custom solutions to ensure your business stands out and attracts the right audience.",
        "link" => "#",
        "btn" => "Call Now",
    ],
    "three" => [
        "image" => "assets/img/carousal/digital.jpg",
        "title" => "Digital Marketing",
        "description" => "Supercharge your business with our comprehensive Digital Marketing services. From SEO and SEM to social media strategies and content marketing, we provide tailored solutions to enhance your online visibility and drive growth.",
        "link" => "#",
        "btn" => "Call Now",
    ],
    "four" => [
        "image" => "assets/img/carousal/smo.jpg",
        "title" => "Social Media Optimization",
        "description" => "Enhance your brand's social media presence with our strategic Social Media Optimization services. Engage with your audience effectively and build a strong online community through targeted content and campaigns.",
        "link" => "#",
        "btn" => "Call Now",
    ],
    "five" => [
        "image" => "assets/img/carousal/development.jpg",
        "title" => "Development",
        "description" => "Get user-friendly, professional, and responsive websites and web applications for your business with our top-notch Web Development Services in India. Our experts provide comprehensive solutions in .NET, PHP, JAVA, LARAVEL, and more, all backed by robust SEO services to maximize your revenue.",
        "link" => "#",
        "btn" => "Call Now",
    ]
];

// Expanded services array
$services = [
    "one" => [
        "icon" => "flaticon-mobile-app",
        "title" => "Web Development",
        "description" => "Our developers provide expert development service to our clients. We offer a variety of website design and development services.",
        "buttonLink" => "#",
        "buttonText" => "Read More",
    ],
    "two" => [
        "icon" => "flaticon-analytics",
        "title" => "Digital Marketing",
        "description" => "Boost your business to a new level by taking our premium marketing services. Our experts offer customized solutions by considering your goals.",
        "buttonLink" => "#",
        "buttonText" => "Read More",
    ],
    "three" => [
        "icon" => "flaticon-coding",
        "title" => "Software Development",
        "description" => "Custom software development tailored to your business needs, ensuring scalable and efficient solutions.",
        "buttonLink" => "#",
        "buttonText" => "Read More",
    ],
    "four" => [
        "icon" => "flaticon-project-management",
        "title" => "Project Management",
        "description" => "Effective project management services to streamline processes and achieve project goals on time and within budget.",
        "buttonLink" => "#",
        "buttonText" => "Read More",
    ],
    "five" => [
        "icon" => "flaticon-mobile-app",
        "title" => "Graphic Design",
        "description" => "Creative graphic design services for branding, marketing materials, and digital content that captivates your audience.",
        "buttonLink" => "#",
        "buttonText" => "Read More",
    ],
    "six" => [
        "icon" => "flaticon-mobile-app",
        "title" => "SEO Services",
        "description" => "Improve your online presence and attract more organic traffic with our SEO strategies and optimizations.",
        "buttonLink" => "#",
        "buttonText" => "Read More",
    ],
    "seven" => [
        "icon" => "flaticon-mobile-app",
        "title" => "Data Analytics",
        "description" => "Harness the power of data with our analytics services to gain valuable insights and make informed business decisions.",
        "buttonLink" => "#",
        "buttonText" => "Read More",
    ],
    "eight" => [
        "icon" => "flaticon-mobile-app",
        "title" => "Email Marketing",
        "description" => "Engage your audience and drive conversions through targeted email marketing campaigns and strategies.",
        "buttonLink" => "#",
        "buttonText" => "Read More",
    ],
];

// company logos
$partners = [
    "assets/img/partner/client-1.png",
    "assets/img/partner/client-2.png",
    "assets/img/partner/client-3.png",
    "assets/img/partner/client-4.png",
    "assets/img/partner/client-5.png",
    "assets/img/partner/client-6.png",
    "assets/img/partner/client-7.png",
    "assets/img/partner/client-8.png",
    "assets/img/partner/client-1.png"
];
// team members
$teamMembers = [
    [
        "name" => "Shaleen Srivastava",
        "position" => "CEO & Founder",
        "image" => "assets/img/all-images/team-img1.png",
        "socials" => [
            "facebook" => "#",
            "instagram" => "#",
            "linkedin" => "#",
            "youtube" => "#"
        ]
    ],
    [
        "name" => "Shaleen Srivastava",
        "position" => "Digital Marketing Officer",
        "image" => "assets/img/all-images/team-img2.png",
        "socials" => [
            "facebook" => "#",
            "instagram" => "#",
            "linkedin" => "#",
            "youtube" => "#"
        ]
    ],
    [
        "name" => "Akash Upadhyay",
        "position" => "Web Designer",
        "image" => "assets/img/all-images/team-img4.png",
        "socials" => [
            "facebook" => "#",
            "instagram" => "#",
            "linkedin" => "#",
            "youtube" => "#"
        ]
    ],
    [
        "name" => "Akash Upadhyay",
        "position" => "Content Writer",
        "image" => "assets/img/all-images/team-img4.png",
        "socials" => [
            "facebook" => "#",
            "instagram" => "#",
            "linkedin" => "#",
            "youtube" => "#"
        ]
    ]
];
// testomonials
$testimonials = [

    [
        "quote" => "Bhutani Infra experienced outstanding results with Digitechshaleen. Their strategies in SEO and digital marketing have significantly enhanced our online presence and customer engagement.",
        "name" => "Bhutani Infra",
        "image" => "assets/img/Default.png",
        "stars" => 5,
        "platform_logo" => "assets/img/icons/google.svg"
    ],
    [
        "quote" => "UAEahead saw a substantial boost in our digital visibility, thanks to Digitechshaleen's expert services. Their team is both professional and results-driven.",
        "name" => "UAEahead",
        "image" => "assets/img/Default.png",
        "stars" => 5,
        "platform_logo" => "assets/img/icons/google.svg"
    ],
    [
        "quote" => "Digitechshaleen's dedication and innovative approach to digital marketing have helped us reach new heights in Switzerland. Sublime Clinic highly recommends their services.",
        "name" => "Sublime Clinic",
        "image" => "assets/img/Default.png",
        "stars" => 5,
        "platform_logo" => "assets/img/icons/google.svg"
    ],
    [
        "quote" => "Omaxe's collaboration with Digitechshaleen has resulted in remarkable growth. Their strategic insights and execution are second to none.",
        "name" => "Omaxe",
        "image" => "assets/img/Default.png",
        "stars" => 5,
        "platform_logo" => "assets/img/icons/google.svg"
    ],
    [
        "quote" => "The expertise Digitechshaleen brought to DPS Gurgaon has been transformative. We've seen tremendous growth in our online engagement and overall visibility.",
        "name" => "Delhi Public School (DPS Gurgaon)",
        "image" => "assets/img/Default.png",
        "stars" => 5,
        "platform_logo" => "assets/img/icons/google.svg"
    ],
    [
        "quote" => "Digitechshaleen provided BBShop.com with unparalleled service that directly contributed to our online sales growth. Their team is a pleasure to work with.",
        "name" => "BBShop.com",
        "image" => "assets/img/Default.png",
        "stars" => 5,
        "platform_logo" => "assets/img/icons/google.svg"
    ],
    [
        "quote" => "Shri Ram Millanium Global School Noida benefited immensely from Digitechshaleen's digital marketing services. Their efforts have greatly improved our online presence.",
        "name" => "Shri Ram Millanium Global School, Noida",
        "image" => "assets/img/Default.png",
        "stars" => 5,
        "platform_logo" => "assets/img/icons/google.svg"
    ],
    [
        "quote" => "M3M Real Estate's digital footprint has expanded significantly thanks to Digitechshaleen's expert strategies. Their service is highly recommended.",
        "name" => "M3M Real Estate",
        "image" => "assets/img/Default.png",
        "stars" => 5,
        "platform_logo" => "assets/img/icons/google.svg"
    ],
    [
        "quote" => "Presidium Empire's collaboration with Digitechshaleen has been instrumental in our digital growth. Their professional approach and excellent results speak for themselves.",
        "name" => "Presidium Empire",
        "image" => "assets/img/Default.png",
        "stars" => 5,
        "platform_logo" => "assets/img/icons/google.svg"
    ],
    [
        "quote" => "Danube Properties, Dubai, has seen a remarkable increase in leads and sales since working with Digitechshaleen. Their expertise in digital marketing is unmatched.",
        "name" => "Danube Properties, Dubai",
        "image" => "assets/img/Default.png",
        "stars" => 5,
        "platform_logo" => "assets/img/icons/google.svg"
    ]
];
