document.addEventListener("DOMContentLoaded", () => {
    fetch('data.json')
      .then(response => response.json())
      .then(data => {
        const container = document.getElementById('projects-container');
        data.projects.forEach(project => {
          const div = document.createElement('div');
          div.className = 'project';
          div.innerHTML = `
            <h3>${project.title}</h3>
            <p>${project.description}</p>
            <a href="${project.link}" target="_blank">Ver más</a>
          `;
          container.appendChild(div);
        });
      });
  });
  