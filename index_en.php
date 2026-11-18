<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) { 
    header("Location: login.php"); 
    exit(); 
}

include 'header_en.inc';
?>

    <main id="main">
        <section class="hero">
            <div class="hero-copy hero-card glass-panel">
                <p class="eyebrow">Technology for better learning</p>
                <h1>Make learning work for everyone.</h1>
                <p class="hero-lede">We build thoughtful digital tools that help educators teach and help every learner find their way forward.</p>
                <p>EduTechies is an educational technology company developing accessible learning platforms and practical online resources. We bring design, software and education together to make digital learning clearer, more inclusive and more engaging.</p>
                <a class="button button-primary" href="jobs.html">Explore open roles</a>
            </div>
            <div class="hero-art hero-card glass-panel">
                <img class="hero-image" src="./images/images.jfif" width="640" height="480" alt="Illustration of a learner using the EduTechies digital learning platform" style="border-radius: 12px;"><br>
                <p class="art-caption">Curiosity, supported by good technology.</p>
            </div>
        </section>

        <section class="section section-narrow glass-panel purpose-intro blue-panel">
            <div class="section-heading">
                <p class="eyebrow">Our purpose</p>
                <h2>Useful technology. Human outcomes.</h2>
                <p>We build digital learning tools for Vietnam’s diverse classrooms, with care for different learning needs, levels of internet access and the languages and experiences of local learners.</p>
            </div>
        </section>

        <section class= "purpose-list">
            <article class="purpose-row">
                <div class="purpose-card glass-panel">
                    <span class="purpose-number" aria-hidden="true">01</span>
                    <h3>Designed for access</h3>
                    <p>We build with accessibility in mind so more people can participate with confidence.</p>
                </div>
                <div class="purpose-card-img glass-panel">
                    <img class="purpose-img" src="images/purpose_1.jpg" alt="Students using assistive technology or learning together in an accessible classroom.">
                </div>
            </article>
            <article class="purpose-row">
                <div class="purpose-card-img glass-panel blue-panel">
                    <img class="purpose-img" src="images/purpose_2.jpg" alt="An educator listening to students or helping them use a laptop.">
                </div>
                <div class="purpose-card glass-panel blue-panel">
                    <span class="purpose-number" aria-hidden="true">02</span>
                    <h3>Made with educators</h3>
                    <p>We listen to the people who teach and learn before deciding what technology should do.</p>
                </div>
            </article>
            <article class="purpose-row">
                <div class="purpose-card glass-panel">
                    <span class="purpose-number" aria-hidden="true">03</span>
                    <h3>Always learning</h3>
                    <p>We test, improve and keep asking how digital learning can work better for everyone.</p>
                </div>
                <div class="purpose-card-img glass-panel">
                    <img class="purpose-img" src="images/purpose_3.jpg" alt="A group of students sharing ideas while working on a digital project.">
                </div>
            </article>
        </section>

        <section class="section roles-section glass-panel blue-panel" aria-labelledby="roles-heading">
            <div class="section-heading">
                <p class="eyebrow">Build with us</p>
                <h2 id="roles-heading">A place for your next idea.</h2>
                <p>We’re looking for people who care about craft, collaboration and better learning experiences.</p>
            </div>
            <form class="search-form glass-panel" action="jobs.html" method="get" role="search">
                <label for="job-search">Search open roles</label>
                <div class="search-controls">
                    <div class="search-input-wrapper">
                        <svg class="search-input-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="10.8" cy="10.8" r="6.8"></circle><path d="m16 16 5 5"></path></svg>
                        <input id="job-search" name="q" type="search" placeholder="Try “developer” or “design”">
                    </div>
                    <button class="button button-dark" type="submit">Search roles</button>
                </div>
            </form>
            <p class="role-link"><a href="jobs.html">View all current opportunities <span aria-hidden="true">→</span></a></p>
        </section>

        <section class="section section-narrow glass-panel" aria-labelledby="approach-heading">
            <div class="section-heading">
                <p class="eyebrow">How we work</p>
                <h2 id="approach-heading">Small team, shared purpose.</h2>
                <p>Our work connects the people, practices and tools behind a more supportive learning experience.</p>
            </div>
            <div class="table-wrap glass-panel">
                <table class="purpose-table">
                    <caption>How our work supports learners and educators</caption>
                    <thead>
                        <tr>
                            <th scope="col">Who we work with</th>
                            <th scope="col">What we create</th>
                            <th scope="col">Why it matters</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" rowspan="2">Education communities</th>
                            <td>Accessible learning platforms</td>
                            <td rowspan="2">More inclusive, engaging online learning</td>
                        </tr>
                        <tr>
                            <td>Practical digital resources</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="country-note glass-panel blue-panel" aria-labelledby="country-heading">
            <div class="country-note-inner">
                <p class="eyebrow">Acknowledgement of Country</p>
                <h2 id="country-heading">We acknowledge the Traditional Custodians of Country.</h2>
                <p>EduTechies acknowledges the Aboriginal and Torres Strait Islander peoples as the Traditional Custodians of the lands, waters and skies on which we live and work. We pay our respects to Elders past, present and emerging, and recognise their continuing connection to land, culture and community.</p>
                <p>An Acknowledgement of Country is a way of showing respect for Traditional Custodians and their enduring relationship with their Country. At EduTechies, we believe that respectful, inclusive education starts with honouring the knowledge systems and cultures that have shaped this land for tens of thousands of years. We are committed to creating learning technology that is genuinely inclusive of Aboriginal and Torres Strait Islander learners, educators and communities.</p>
            </div>
        </section>
    </main>

<?php
include 'footer_en.inc';
?>
