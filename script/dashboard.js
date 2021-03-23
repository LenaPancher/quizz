function addQuiz() {
    var quiz = document.getElementById("quiz");
    var addQuiz = document.getElementById("addQuiz");
    addQuiz.addEventListener("click", event => {
        // Div
        var newDiv = document.createElement("div");
        newDiv.classList.add("addQuiz", "mt-5", "py-4", "blocDashBoard");
        quiz.appendChild(newDiv);

        // H4
        var newH4 = document.createElement("h4");
        newH4.classList.add("mb-4");
        newH4.innerHTML = "Ajouter un quiz";
        newDiv.appendChild(newH4);

        // Form
        var newForm = document.createElement("form");
        newForm.setAttribute("method", "post");
        newForm.setAttribute("action", "formDashboard.php");
        newDiv.appendChild(newForm);

        // Input
        var newInput = document.createElement("input");
        newInput.setAttribute("type", "text");
        newInput.setAttribute("name", "addNameQuiz");
        newInput.setAttribute("placeholder", "Nom du quiz");
        newInput.required = true;
        newForm.appendChild(newInput);

        newInput.appendChild(document.createElement("br"));
        newInput.appendChild(document.createElement("br"));

        // P
        var newP = document.createElement("p");
        newP.innerHTML = "Catégorie :"
        newInput.appendChild(newP);

        // Select
        var newSelect = document.createElement("select");
        newSelect.setAttribute("name", "id_category");
        // insérer fonction choiceCategory()
        newP.appendChild(newSelect);
        newP.appendChild(document.createElement("br"));

        // Input button
        var newInputAdd = document.createElement("input");
        newInputAdd.setAttribute("type", "submit");
        newInputAdd.classList.add("btn", "btn-light");
        newInputAdd.setAttribute("value", "Ajouter");
        newForm.appendChild(newInputAdd);
    })
}

addQuiz();