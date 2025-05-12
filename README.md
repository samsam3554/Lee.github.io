<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AI Developer Portfolio</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #1c1c1c;
      color: white;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background-color: #FF5733;
    }

    .logo {
      font-size: 1.8em;
      font-weight: bold;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
      padding: 0;
      margin: 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-size: 1.1em;
      padding: 5px 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    nav a.active {
      background-color: rgba(255, 255, 255, 0.2);
    }

    main {
      flex: 1;
      padding: 40px;
      background-color: #1c1c1c;
    }

    section {
      max-width: 900px;
      margin: 0 auto 60px auto;
      padding: 20px;
      background: #333;
      border-radius: 8px;
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.5s ease-in-out;
    }

    section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    #about {
      display: flex;
      align-items: center;
      background: none;
    }

    #about img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      margin-right: 20px;
    }

    .about-text {
      flex: 1;
    }

    .project-category h3 {
      margin-top: 0;
    }

    .project-category ul {
      padding-left: 20px;
    }

    .project-category li {
      margin-bottom: 10px;
    }

    footer {
      position: relative;
      text-align: center;
      padding: 20px;
      background-color: #333;
    }

    .visitor-counter {
      position: absolute;
      right: 20px;
      bottom: 20px;
      font-size: 0.9em;
      color: #ccc;
    }

    a {
      color: #FF7043;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">My Portfolio</div>
    <nav>
      <ul>
        <li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#projects" class="nav-link">Projects</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="about">
      <img src="https://via.placeholder.com/200" alt="Profile">
      <div class="about-text">
        <h2>About Me</h2>
        <p>I want to be an AI developer. This is my personal portfolio website.</p>
      </div>
    </section>

    <section id="projects" class="project-category">
      <h2>Projects</h2>
      <h3>AI Development</h3>
      <ul>
        <li>YOLOv8-based Drowning Detection System</li>
        <li>Real-time KakaoBot Alert Integration</li>
      </ul>
    </section>

    <section id="contact">
      <h2>Contact</h2>
      <p>Email: me@example.com</p>
    </section>
  </main>

  <footer>
    &copy; 2025 My Portfolio
    <div class="visitor-counter" id="visitorCount">
      Visits: Loading...
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const navLinks = document.querySelectorAll(".nav-link");

      navLinks.forEach(link => {
        link.addEventListener("click", function () {
          navLinks.forEach(l => l.classList.remove("active"));
          this.classList.add("active");
        });
      });

      const sections = document.querySelectorAll("section");
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          }
        });
      }, { threshold: 0.2 });

      sections.forEach(section => observer.observe(section));

      // 서버에서 방문자 수 가져오기
      fetch("visitor_counter.php")
        .then(response => response.text())
        .then(count => {
          document.getElementById("visitorCount").textContent = "Visits: " + count;
        })
        .catch(error => {
          console.error("Error fetching visitor count:", error);
          document.getElementById("visitorCount").textContent = "Visits: error";
        });
    });
  </script>

</body>
</html>
