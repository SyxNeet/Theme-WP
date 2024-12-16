const getStartedTemplate = document.getElementById("get-started");
if (getStartedTemplate) {
  document
    .getElementsByClassName("get-started")[0]
    .appendChild(getStartedTemplate.content.cloneNode(true));
}
