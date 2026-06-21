<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Samaha Ali | PHP Developer</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>
<style type="text/css">

 *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    scroll-behavior:smooth;
}

body{
    background: radial-gradient(circle at top, #111b33, #070b14);
    color:white;
    font-family: 'Segoe UI', sans-serif;
}

/* Container */
.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

/* NAVBAR */
.navbar{
    position:fixed;
    top:0;
    width:100%;
    padding:15px 0;
    background:rgba(10,15,30,0.6);
    backdrop-filter: blur(12px);
    border-bottom:1px solid rgba(255,255,255,0.08);
    z-index:1000;
}

.nav-container{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    color:#00e5ff;
    font-size:20px;
    font-weight:700;
    letter-spacing:1px;
}

.nav-links{
    display:flex;
    list-style:none;
    gap:20px;
}

.nav-links a{
    text-decoration:none;
    color:white;
    font-size:14px;
    transition:0.3s;
}

.nav-links a:hover{
    color:#00e5ff;
}

/* HERO */
.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    padding-top:80px;
}

.hero-content{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:60px;
}

.left{
    flex:1;
}

.welcome{
    color:#00e5ff;
    margin-bottom:10px;
}

.hero h1{
    font-size:55px;
    font-weight:800;
}

.hero h2{
    color:#00e5ff;
    margin-top:10px;
    font-weight:500;
}

.desc{
    margin:20px 0;
    line-height:1.8;
    color:rgba(255,255,255,0.8);
}

/* BUTTON */
.btn-main{
    background:linear-gradient(135deg,#00e5ff,#00a2ff);
    color:black;
    padding:12px 25px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
    display:inline-block;
    transition:0.3s;
}

.btn-main:hover{
    transform:translateY(-4px);
    box-shadow:0 10px 25px rgba(0,229,255,0.3);
}

/* PROFILE */
.profile-card{
    width:320px;
    height:320px;
    border-radius:50%;
    position:relative;
    overflow:visible;
    margin:auto;
}

.profile-card img{
    width:100%;
    height:100%;
    object-fit:cover;
    object-position:40% center;
    border-radius:50%;
    border:5px solid #0b1120;
}

/* Rotating outer circle */
.profile-card::before{
    content:'';
    position:absolute;
    width:360px;
    height:360px;
    border:4px solid #00e5ff;
    border-top-color:transparent;
    border-radius:50%;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    animation:spin 8s linear infinite;
}

/* Second circle */
.profile-card::after{
    content:'';
    position:absolute;
    width:390px;
    height:390px;
    border:2px dashed rgba(0,229,255,.6);
    border-radius:50%;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    animation:spin2 12s linear infinite;
}

@keyframes spin{
    from{
        transform:translate(-50%,-50%) rotate(0deg);
    }
    to{
        transform:translate(-50%,-50%) rotate(360deg);
    }
}

@keyframes spin2{
    from{
        transform:translate(-50%,-50%) rotate(360deg);
    }
    to{
        transform:translate(-50%,-50%) rotate(0deg);
    }
}
/* SECTIONS */
.about,.skills,.projects,.life-view,.contact,.stats{
    padding:90px 0;
}

.section-title{
    text-align:center;
    margin-bottom:40px;
    color:#00e5ff;
    font-size:28px;
}

/* SKILLS */
.skill-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(160px,1fr));
    gap:20px;
}

.skill-card{
    background:rgba(255,255,255,0.05);
    padding:20px;
    text-align:center;
    border-radius:12px;
    border:1px solid rgba(255,255,255,0.08);
    transition:0.3s;
}

.skill-card:hover{
    transform:translateY(-6px);
    background:rgba(0,229,255,0.08);
}

/* STATS */
.stats-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:20px;
}

.stat-card{
    background:rgba(255,255,255,0.05);
    padding:25px;
    text-align:center;
    border-radius:12px;
    border:1px solid rgba(255,255,255,0.08);
}

.stat-card h2{
    color:#00e5ff;
}

/* PROJECTS */
.project-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

.project-card{
    background:rgba(255,255,255,0.05);
    padding:25px;
    border-radius:12px;
    border:1px solid rgba(255,255,255,0.08);
    transition:0.3s;
}

.project-card:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 25px rgba(0,229,255,0.1);
}

.project-card h3{
    color:#00e5ff;
}

/* CONTACT */
.contact-box{
    background:rgba(255,255,255,0.05);
    padding:40px;
    border-radius:15px;
    text-align:center;
    border:1px solid rgba(255,255,255,0.08);
}

/* FOOTER */
footer{
    text-align:center;
    padding:25px;
    border-top:1px solid rgba(255,255,255,0.1);
    color:rgba(255,255,255,0.7);
}

/* RESPONSIVE */
@media(max-width:768px){
    .hero-content{
        flex-direction:column;
        text-align:center;
    }

    .hero h1{
        font-size:40px;
    }

    .profile-card{
        width:260px;
        height:320px;
    }
}
/* SERVICES */

.services{
    padding:90px 0;
}

.service-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

.service-card{
    background:rgba(255,255,255,.05);
    border:1px solid rgba(255,255,255,.08);
    border-radius:15px;
    padding:30px;
    transition:.4s;
    position:relative;
    overflow:hidden;
}

.service-card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:4px;
    background:#00e5ff;
}

.service-card:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 30px rgba(0,229,255,.15);
}

.service-card h3{
    color:#00e5ff;
    margin-bottom:15px;
}

.service-card p{
    color:rgba(255,255,255,.8);
    line-height:1.8;
}
/* PROJECTS */

.project-top{
    display:inline-block;
    background:rgba(0,229,255,.1);
    color:#00e5ff;
    padding:6px 14px;
    border-radius:30px;
    margin-bottom:15px;
    font-size:13px;
}

.project-card{
    position:relative;
    overflow:hidden;
}

.project-card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:3px;
    background:#00e5ff;
}

/* CONTACT */

.contact-box{
    max-width:700px;
    margin:auto;
}

.contact-box h3{
    color:#00e5ff;
    margin-bottom:15px;
    font-size:30px;
}

.contact-box p{
    margin-bottom:15px;
    color:rgba(255,255,255,.8);
}
.contact-wrapper{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:40px;
}

.contact-form,
.contact-info{
    background:#08152d;
    padding:40px;
    border-radius:18px;
    border:1px solid rgba(255,255,255,.08);
}

.contact-form label{
    display:block;
    margin-bottom:10px;
    margin-top:15px;
    font-weight:600;
}

.contact-form input,
.contact-form textarea{
    width:100%;
    padding:16px;
    background:#020b1d;
    border:1px solid rgba(255,255,255,.08);
    border-radius:10px;
    color:white;
    outline:none;
}

.contact-form textarea{
    resize:none;
}

.contact-form input:focus,
.contact-form textarea:focus{
    border-color:#00e5ff;
}

.contact-form button{
    margin-top:20px;
    border:none;
    cursor:pointer;
}

.contact-text{
    color:#b5bfd4;
    margin-bottom:30px;
}

.contact-info h3{
    color:#00e5ff;
    margin-bottom:40px;
}

.social-links{
    display:flex;
    flex-direction:column;
}

.social-links a{
    color:white;
    text-decoration:none;
    padding:18px 0;
    border-bottom:1px solid rgba(255,255,255,.08);
    transition:.3s;
}

.social-links a:hover{
    color:#00e5ff;
}

@media(max-width:768px){

.contact-wrapper{
    grid-template-columns:1fr;
}

}
</style>

<body>
    <nav class="navbar">

    <div class="container nav-container">

        <div class="logo">
            SA.
        </div>

        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

    </div>

</nav>

<section class="hero">
    <div class="container">

        <div class="hero-content">

            <div class="left">

                <span class="welcome">👋 Hello, I'm</span>

               <h1>SAMAHA ALI</h1>

               <h2>Full Stack Developer</h2>

               <p class="desc">
               Full Stack Developer with hands-on experience in PHP, Laravel, MySQL,
               JavaScript and Bootstrap. Passionate about building scalable web
               applications, solving business problems and creating modern user
               experiences.
               </p>   

                 <div style="display:flex;gap:15px;flex-wrap:wrap;margin-top:25px;">

                    <a href="#projects" class="btn-main">
                        View Projects
                    </a>

                    <a href="#contact" class="btn-main"
                    style="background:transparent;color:#00e5ff;border:1px solid #00e5ff;">
                        Hire Me
                    </a>

                </div>

                <div style="margin-top:35px;display:flex;gap:30px;flex-wrap:wrap;">

                    <div>
                        <h3 style="color:#00e5ff;">3+</h3>
                        <small>Projects</small>
                    </div>

                    <div>
                        <h3 style="color:#00e5ff;">1+</h3>
                        <small>Years Learning</small>
                    </div>

                    <div>
                        <h3 style="color:#00e5ff;">7+</h3>
                        <small>Technologies</small>
                    </div>

                </div>

            </div>

            <div class="right">

                <div class="profile-card">

                    <img src="image/samaha.png"
                         alt="Samaha Ali">

                </div>

            </div>

        </div>

    </div>
</section>
<section class="about" id="about">

    <div class="container">

        <h2 class="section-title">About Me</h2>

        <p>
            I am a Full Stack Developer focused on building secure, responsive and
            high-performance web applications. I have experience working with PHP,
            Laravel, MySQL, JavaScript and Bootstrap.

            My goal is to develop professional software solutions that improve
            business operations and deliver real value to users.
            </p>
    </div>

</section>


<section class="skills" id="skills">

    <div class="container">

        <h2 class="section-title">My Skills</h2>

        <div class="skill-grid">

<div class='row'>
<div class='col-lg-3 col-md-6'  col-lg-12>
<div class="skill-card">
    <h4>HTML5</h4>
    <small>Structure</small>
</div>
</div>
</div>
<div class='row'>
<div class='col-lg-3 col-md-6'  col-lg-12>
<div class="skill-card">
    <h4>CSS3</h4>
    <small>Styling</small>
</div>
</div>
</div>
<div class='row'>
<div class='col-lg-3 col-md-6'  col-lg-12>
<div class="skill-card">
    <h4>Bootstrap</h4>
    <small>Responsive UI</small>
</div>
</div>
</div>
<div class='row'>
<div class='col-lg-3 col-md-6'  col-lg-12>
<div class="skill-card">
    <h4>JavaScript</h4>
    <small>Frontend Logic</small>
</div>
</div>
</div>
<div class='row'>
<div class='col-lg-3 col-md-6'  col-lg-12>
<div class="skill-card">
    <h4>PHP</h4>
    <small>Backend Development</small>
</div>
</div>
</div>
<div class='row'>
<div class='col-lg-3 col-md-6'  col-lg-12>
<div class="skill-card">
    <h4>MySQL</h4>
    <small>Database</small>
</div>
</div>
</div>
<div class='row'>
<div class='col-lg-3 col-md-6'  col-lg-12>
<div class="skill-card">
    <h4>Laravel</h4>
    <small>Framework</small>
</div>
</div>
</div>

 </div>

    </div>

</section>
<section class="services">

    <div class="container">

        <h2 class="section-title">
            What I Offer
        </h2>

        <div class="service-grid">

            <div class="service-card">
                <h3>Web Development</h3>
                <p>
                    Responsive and modern websites with clean UI.
                </p>
            </div>

            <div class="service-card">
                <h3>PHP Development</h3>
                <p>
                    Custom PHP applications and backend systems.
                </p>
            </div>

            <div class="service-card">
                <h3>Laravel Development</h3>
                <p>
                    Secure and scalable Laravel web applications.
                </p>
            </div>

            <div class="service-card">
                <h3>Database Design</h3>
                <p>
                    Efficient MySQL database architecture.
                </p>
            </div>

            <div class="service-card">
                <h3>Inventory Systems</h3>
                <p>
                    Stock, sales and purchase management systems.
                </p>
            </div>

            <div class="service-card">
                <h3>POS Solutions</h3>
                <p>
                    Billing and customer transaction systems.
                </p>
            </div>

        </div>

    </div>

</section>
<section class="stats">

    <div class="container">

        <div class="stats-grid">

            <div class="stat-card">
                <h2>3+</h2>
                <p>Projects Completed</p>
            </div>

            <div class="stat-card">
                <h2>7+</h2>
                <p>Skills Learned</p>
            </div>

            <div class="stat-card">
                <h2>100%</h2>
                <p>Dedication</p>
            </div>

            <div class="stat-card">
                <h2>24/7</h2>
                <p>Learning Mindset</p>
            </div>

        </div>

    </div>

</section>
<section class="projects" id="projects">

    <div class="container">

        <h2 class="section-title">
            Featured Projects
        </h2>

        <div class="project-grid">

            <div class="project-card">

                <div class="project-top">
                    PHP • MySQL
                </div>

                <h3>Inventory Management System</h3>

                <p>
                    Complete stock, purchase and sales management
                    system with reporting features.
                </p>

                <a href="#" class="btn-main">
                    View Project
                </a>

            </div>

            <div class="project-card">

                <div class="project-top">
                    HTML • CSS • JS
                </div>

                <h3>Portfolio Website</h3>

                <p>
                    Modern personal portfolio with responsive design
                    and professional UI.
                </p>

                <a href="#" class="btn-main">
                    View Project
                </a>

            </div>

            <div class="project-card">

                <div class="project-top">
                    PHP • Bootstrap
                </div>

                <h3>POS System</h3>

                <p>
                    Billing system for customer transactions,
                    products and sales records.
                </p>

                <a href="#" class="btn-main">
                    View Project
                </a>

            </div>

        </div>

    </div>

</section>
<section class="life-view">

    <div class="container">

        <h2 class="section-title">My Life View</h2>

        <p class="life-text">

            I believe that consistency, discipline,
            and continuous learning are the keys to success.
            Every challenge is an opportunity to grow,
            and every project is a step toward becoming
            a better developer.

        </p>

    </div>

</section>
<section class="contact" id="contact">

    <div class="container">

        <h2 class="section-title">
            Let's Work Together
        </h2>

        <div class="contact-box">

            <h3>SAMAHA ALI</h3>

            <p>
                Available for freelance and full-time opportunities.
            </p>

            <p>
                Email:samahaalirajput1828@gmail.com
            </p>

            <a href="mailto:samahaalirajput1828@gmail.com"
               class="btn-main">
                Contact Me
            </a>

        </div>

    </div>

</section>
<section class="contact" id="contact">

<div class="container">

<h2 class="section-title">Get In Touch</h2>

<div class="contact-wrapper">

<div class="contact-form">

<form>

<label>Name</label>
<input type="text" placeholder="Your Name">

<label>Email</label>
<input type="email" placeholder="your.email@example.com">

<label>Message</label>
<textarea rows="6" placeholder="How can I help you?"></textarea>

<button type="submit" class="btn-main">
Send Message
</button>

</form>

</div>

<div class="contact-info">

<p class="contact-text">
Or reach me directly at:
</p>

<h3>
samahaalirajput1828@gmail.com
</h3>

<div class="social-links">

<a href="#">GitHub</a>

<a href="#">LinkedIn</a>

<a href="#">Facebook</a>

</div>

</div>

</div>

</div>

</section>

</body>
<footer>

    <div class="container">

        <p>
            © 2026 Samaha Ali.
            All Rights Reserved.
        </p>

    </div>

</footer>

</html>