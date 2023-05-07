function displayModal(project) {
    const modal = document.createElement("div");
    modal.classList.add("modal");
    modal.innerHTML = `
      <div class="modal-content">
          <span class="close">&times;</span>
          <img src="${project.url_photo}" class="modalImage"/>
          <h2 id="modalTitle">${project.titre}</h2>
          <p id="modalDescription">${project.description_long}</p>
          <a href="${project.url_site}" class="modalUrl">${project.titre}</a>
      </div>
    `;
    document.body.appendChild(modal);
  
    // Fermer la modal lorsque l'utilisateur clique sur la croix
    const closeBtn = modal.querySelector(".close");
    closeBtn.addEventListener("click", function () {
      modal.remove();
    });
  
    // Fermer la modal lorsque l'utilisateur clique à l'extérieur de la modal
    window.addEventListener("click", function (event) {
      if (event.target === modal) {
        modal.remove();
      }
    });
}

// import projects.json
fetch("/portfolio/data/projects.json", {
    method: "POST",
    body: JSON.stringify({ action: "liste" })
})
.then(response => response.json())
.then(data => {
    const projectsContainer = document.getElementById("projects");
    const projectsList = document.createElement("div");
    projectsList.className = "contenue_projects";

    data.forEach((project, i) => {
        const flip = document.createElement("div");
        flip.className = "flip";
        flip.setAttribute("data-id", project.id);
        flip.innerHTML = `
            <div class="front" style="background-image: url(${project.url_photo})">
                <h2>${project.titre}</h2>
            </div>
            <div class="back">
                <h2>${project.titre}</h2>
                <p>${project.description}</p>
            </div>
        `;
        projectsList.appendChild(flip);

        flip.addEventListener("click", function () {
            displayModal(project);
        });
    });

    projectsContainer.appendChild(projectsList);
});