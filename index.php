<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Isaac Kumbula - Portfolio</title>
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
theme: {
extend: {
colors: {
primary: '#1e3a8a',
secondary: '#64748b'
},
borderRadius: {
'none': '0px',
'sm': '4px',
DEFAULT: '8px',
'md': '12px',
'lg': '16px',
'xl': '20px',
'2xl': '24px',
'3xl': '32px',
'full': '9999px',
'button': '8px'
}
}
}
}
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
<style>
:where([class^="ri-"])::before { content: "\f3c2"; }
body { font-family: 'Inter', sans-serif; }
.nav-link.active { color: #1e3a8a; }
.skill-card:hover { transform: translateY(-4px); }
.project-card:hover { transform: translateY(-8px); }
</style>
</head>
<body class="bg-gray-50">
<nav class="fixed top-0 left-0 right-0 bg-white shadow-sm z-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between h-16">
<div class="flex items-center">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<a href="#" class="text-2xl font-['Righteous'] text-primary">Isaac K.</a>
</div>
<div class="hidden md:flex items-center space-x-8">
<a href="#home" class="nav-link active text-sm font-medium">Home</a>
<a href="#about" class="nav-link text-sm font-medium text-gray-700 hover:text-primary">About</a>
<a href="#projects" class="nav-link text-sm font-medium text-gray-700 hover:text-primary">Projects</a>
<a href="#education" class="nav-link text-sm font-medium text-gray-700 hover:text-primary">Education</a>
<a href="#contact" class="nav-link text-sm font-medium text-gray-700 hover:text-primary">Contact</a>
<button class="bg-primary text-white px-4 py-2 !rounded-button text-sm font-medium hover:bg-primary/90">Download CV</button>
</div>
</div>
</div>
</nav>
<section id="home" class="pt-24 pb-16 relative overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://public.readdy.ai/ai/img_res/d7057c75cd1e84be89792e84133849aa.jpg'); opacity: 0.1;"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
<div class="grid md:grid-cols-2 gap-12 items-center">
<div class="md:pr-12">
<h1 class="text-5xl font-bold text-gray-900 mb-6">Full Stack Developer & Cloud Solutions Architect</h1>
<p class="text-xl text-gray-600 mb-8">Building robust, scalable applications with modern technologies. Specialized in Flutter, Laravel, and Spring Boot development.</p>
<div class="flex space-x-4">
<button onclick="scrollToProjects()" class="bg-primary text-white px-6 py-3 !rounded-button text-sm font-medium hover:bg-primary/90">View My Work</button>
<button class="border border-primary text-primary px-6 py-3 !rounded-button text-sm font-medium hover:bg-primary/5">Contact Me</button>
</div>
</div>
<div class="relative">
<div class="w-full h-[500px] rounded-2xl shadow-xl overflow-hidden">
<img src="https://public.readdy.ai/ai/img_res/9ee973833adbdbc95a855669e1d71eff.jpg" alt="Tech Abstract" class="w-full h-full object-cover">
</div>
</div>
</div>
</div>
</section>
<section id="about" class="py-16 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">About Me</h2>
<div class="grid md:grid-cols-2 gap-12">
<div>
<p class="text-gray-600 mb-6">With over 5 years of experience in full-stack development, I specialize in building scalable web applications and mobile solutions. My passion lies in creating efficient, user-friendly applications that solve real-world problems.</p>
<p class="text-gray-600">I'm constantly learning and adapting to new technologies, with a particular focus on cloud architecture and security best practices. My approach combines technical expertise with business acumen to deliver solutions that drive real value.</p>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="skill-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition-all duration-300">
<h3 class="font-semibold text-gray-900 mb-4">Front-End</h3>
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm">HTML</span>
<span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm">JavaScript</span>
<span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm">Flutter</span>
<span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm">Tailwind CSS</span>
</div>
</div>
<div class="skill-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition-all duration-300">
<h3 class="font-semibold text-gray-900 mb-4">Back-End</h3>
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm">Laravel</span>
<span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm">Spring Boot</span>
<span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm">PHP</span>
<span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm">Java</span>
</div>
</div>
<div class="skill-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition-all duration-300">
<h3 class="font-semibold text-gray-900 mb-4">Databases</h3>
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm">MySQL</span>
<span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm">PostgreSQL</span>
<span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm">MongoDB</span>
</div>
</div>
<div class="skill-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition-all duration-300">
<h3 class="font-semibold text-gray-900 mb-4">DevOps</h3>
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1 bg-orange-50 text-orange-700 rounded-full text-sm">Docker</span>
<span class="px-3 py-1 bg-orange-50 text-orange-700 rounded-full text-sm">Kubernetes</span>
<span class="px-3 py-1 bg-orange-50 text-orange-700 rounded-full text-sm">CI/CD</span>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="projects" class="py-16 bg-gray-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Featured Projects</h2>
<div class="grid md:grid-cols-3 gap-8">
<div class="project-card bg-white rounded-xl shadow-sm overflow-hidden transition-all duration-300">
<img src="https://public.readdy.ai/ai/img_res/73f10add8d818b7f8008a0fd116624ce.jpg" alt="Student Portal" class="w-full h-48 object-cover">
<div class="p-6">
<h3 class="font-semibold text-xl text-gray-900 mb-2">Student Portal - HIT</h3>
<p class="text-gray-600 text-sm mb-4">Developed a comprehensive student management system with integrated payment solutions and automated services.</p>
<div class="flex flex-wrap gap-2 mb-4">
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Flutter</span>
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Laravel</span>
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Spring Boot</span>
</div>
<button onclick="showProjectModal('student-portal')" class="w-full bg-primary text-white px-4 py-2 !rounded-button text-sm font-medium hover:bg-primary/90">View Details</button>
</div>
</div>
<div class="project-card bg-white rounded-xl shadow-sm overflow-hidden transition-all duration-300">
<img src="https://public.readdy.ai/ai/img_res/9deb0450c77c2fc0d57aaaa4b0ed544a.jpg" alt="Investment System" class="w-full h-48 object-cover">
<div class="p-6">
<h3 class="font-semibold text-xl text-gray-900 mb-2">Investment System</h3>
<p class="text-gray-600 text-sm mb-4">Built a cloud-based investment management system with RESTful APIs and real-time portfolio tracking.</p>
<div class="flex flex-wrap gap-2 mb-4">
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Java</span>
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">PostgreSQL</span>
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">React</span>
</div>
<button onclick="showProjectModal('investment-system')" class="w-full bg-primary text-white px-4 py-2 !rounded-button text-sm font-medium hover:bg-primary/90">View Details</button>
</div>
</div>
<div class="project-card bg-white rounded-xl shadow-sm overflow-hidden transition-all duration-300">
<img src="https://public.readdy.ai/ai/img_res/39d2327f8617766396fc6cdefc8b072e.jpg" alt="Land Digitalization" class="w-full h-48 object-cover">
<div class="p-6">
<h3 class="font-semibold text-xl text-gray-900 mb-2">Land Digitalization</h3>
<p class="text-gray-600 text-sm mb-4">Automated land application processes through digital transformation, eliminating paper-based workflows.</p>
<div class="flex flex-wrap gap-2 mb-4">
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Flutter</span>
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Firebase</span>
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">GIS</span>
</div>
<button onclick="showProjectModal('land-digitalization')" class="w-full bg-primary text-white px-4 py-2 !rounded-button text-sm font-medium hover:bg-primary/90">View Details</button>
</div>
</div>
<div class="project-card bg-white rounded-xl shadow-sm overflow-hidden transition-all duration-300">
<img src="https://public.readdy.ai/ai/img_res/73f10add8d818b7f8008a0fd116624ce.jpg" alt="NFC Card System" class="w-full h-48 object-cover">
<div class="p-6">
<h3 class="font-semibold text-xl text-gray-900 mb-2">NFC Card Verification System</h3>
<p class="text-gray-600 text-sm mb-4">Implemented a desktop application to verify student exam eligibility based on registration and performance criteria using NFC technology.</p>
<div class="flex flex-wrap gap-2 mb-4">
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Java</span>
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">NFC</span>
<span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">SQLite</span>
</div>
<button onclick="showProjectModal('nfc-system')" class="w-full bg-primary text-white px-4 py-2 !rounded-button text-sm font-medium hover:bg-primary/90">View Details</button>
</div>
</div>
</div>
</div>
</section>
<div id="project-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
<div class="bg-white rounded-xl p-8 max-w-lg w-full mx-4">
<div class="flex justify-between items-center mb-6">
<h3 id="modal-title" class="text-2xl font-bold text-gray-900"></h3>
<button onclick="closeProjectModal()" class="text-gray-500 hover:text-gray-700">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-close-line ri-lg"></i>
</div>
</button>
</div>
<div id="modal-content" class="text-gray-600"></div>
</div>
</div>
<section id="education" class="py-16 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Education & Certifications</h2>
<div class="space-y-8">
<div class="flex">
<div class="flex-grow border-l border-gray-200 pl-8">
<h3 class="font-semibold text-lg text-gray-900">BSc in Information Systems (Hons)</h3>
<p class="text-gray-600">Harare Institute of Technology</p>
<p class="text-sm text-gray-500 mt-2">Focused on software engineering, database management, and system architecture. Graduated with First Class Honours.</p>
</div>
</div>
<div class="flex">
<div class="flex-grow border-l border-gray-200 pl-8">
<h3 class="font-semibold text-lg text-gray-900">Certified in Cybersecurity (ISC2)</h3>
<p class="text-gray-600">International Information System Security Certification Consortium</p>
<p class="text-sm text-gray-500 mt-2">Advanced certification in cybersecurity principles, risk management, and security operations.</p>
</div>
</div>
</div>
</div>
</section>
<section id="contact" class="py-16 bg-gray-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Get in Touch</h2>
<div class="grid md:grid-cols-2 gap-12">
<div>
<form class="space-y-6" action="https://formspree.io/f/xzzedqlv" method="POST">
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
<input type="text" name="name" required class="w-full px-4 py-2 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Your name">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
<input type="email" name="email" required class="w-full px-4 py-2 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="your@email.com">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
<textarea name="message" required class="w-full px-4 py-2 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary h-32" placeholder="Your message"></textarea>
</div>
<button type="submit" class="w-full bg-primary text-white px-6 py-3 !rounded-button text-sm font-medium hover:bg-primary/90">Send Message</button>
</form>
</div>
<div class="flex flex-col justify-center">
<div class="bg-white p-8 rounded-xl shadow-sm">
<h3 class="font-semibold text-xl text-gray-900 mb-6">Contact Information</h3>
<div class="space-y-4">
<div class="flex items-center">
<div class="w-10 h-10 flex items-center justify-center">
<i class="ri-mail-line text-primary ri-lg"></i>
</div>
<span class="text-gray-600 ml-4">isaackumbula27@gmail.com</span>
</div>
<div class="flex items-center">
<div class="w-10 h-10 flex items-center justify-center">
<i class="ri-phone-line text-primary ri-lg"></i>
</div>
<span class="text-gray-600 ml-4">+263 772 472 250</span>
</div>
<div class="flex items-center">
<div class="w-10 h-10 flex items-center justify-center">
<i class="ri-map-pin-line text-primary ri-lg"></i>
</div>
<span class="text-gray-600 ml-4">Harare, Zimbabwe</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<footer class="bg-white py-8">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row justify-between items-center">
<p class="text-gray-600 text-sm">&copy; 2025 Isaac Kumbula. All rights reserved.</p>
<div class="flex space-x-6 mt-4 md:mt-0">
<a href="#home" class="text-sm text-gray-600 hover:text-primary">Home</a>
<a href="#about" class="text-sm text-gray-600 hover:text-primary">About</a>
<a href="#projects" class="text-sm text-gray-600 hover:text-primary">Projects</a>
<a href="#education" class="text-sm text-gray-600 hover:text-primary">Education</a>
<a href="#contact" class="text-sm text-gray-600 hover:text-primary">Contact</a>
</div>
</div>
</div>
</footer>
<script>
function scrollToProjects() {
const projectsSection = document.getElementById('projects');
const navHeight = document.querySelector('nav').offsetHeight;
const targetPosition = projectsSection.offsetTop - navHeight;
window.scrollTo({
top: targetPosition,
behavior: 'smooth'
});
}
// Add intersection observer for project cards animation
document.addEventListener('DOMContentLoaded', function() {
const projectCards = document.querySelectorAll('.project-card');
const observer = new IntersectionObserver((entries) => {
entries.forEach(entry => {
if (entry.isIntersecting) {
entry.target.style.opacity = '1';
entry.target.style.transform = 'translateY(0)';
}
});
}, {
threshold: 0.2
});
projectCards.forEach(card => {
card.style.opacity = '0';
card.style.transform = 'translateY(20px)';
card.style.transition = 'all 0.6s ease-out';
observer.observe(card);
});
});
const projectDetails = {
'student-portal': {
title: 'Student Portal - HIT',
content: `
<ul class="space-y-2">
<li>• Web & mobile portal for students (personal details, payments, exam results).</li>
<li>• Integrated Zimswitch & PayNow for online payments.</li>
<li>• Tech Stack: Flutter, Laravel, Spring Boot, MySQL, Redis.</li>
<li>• Impact: Reduced manual processing by 60%.</li>
</ul>
`
},
'investment-system': {
title: 'Investment System',
content: `
<ul class="space-y-2">
<li>• Cloud-based investment system with 99.9% uptime.</li>
<li>• Developed RESTful APIs for external clients.</li>
<li>• Tech Stack: Java (Play Framework), PostgreSQL.</li>
</ul>
`
},
'land-digitalization': {
title: 'Land Digitalization',
content: `
<ul class="space-y-2">
<li>• Led development of paperless land application system.</li>
<li>• Built using Flutter & Firebase.</li>
</ul>
`
},
'nfc-system': {
title: 'NFC Card Verification System',
content: `
<ul class="space-y-2">
<li>• Desktop application for student exam eligibility verification.</li>
<li>• NFC card-based authentication system.</li>
<li>• Real-time verification of registration status and academic performance.</li>
<li>• Tech Stack: Java, NFC API, SQLite database.</li>
<li>• Impact: Eliminated manual verification process, reduced exam hall entry time by 80%.</li>
</ul>
`
}
};
function showProjectModal(projectId) {
const modal = document.getElementById('project-modal');
const title = document.getElementById('modal-title');
const content = document.getElementById('modal-content');
title.textContent = projectDetails[projectId].title;
content.innerHTML = projectDetails[projectId].content;
modal.classList.remove('hidden');
modal.classList.add('flex');
document.body.style.overflow = 'hidden';
}
function closeProjectModal() {
const modal = document.getElementById('project-modal');
modal.classList.add('hidden');
modal.classList.remove('flex');
document.body.style.overflow = 'auto';
}
document.addEventListener('DOMContentLoaded', function() {
const navLinks = document.querySelectorAll('.nav-link');
const sections = document.querySelectorAll('section');
function updateActiveLink() {
let current = '';
sections.forEach(section => {
const sectionTop = section.offsetTop;
if (window.pageYOffset >= sectionTop - 100) {
current = section.getAttribute('id');
}
});
navLinks.forEach(link => {
link.classList.remove('active');
if (link.getAttribute('href').substring(1) === current) {
link.classList.add('active');
}
});
}
window.addEventListener('scroll', updateActiveLink);
});
</script>
</body>
</html>