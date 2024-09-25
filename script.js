// script.js

// Add event listeners to interactive elements
document.addEventListener("DOMContentLoaded", function() {
    // Add hover effect to education section
    const educationList = document.getElementById("education");
    educationList.addEventListener("mouseover", function() {
      educationList.style.background = "#f0f0f0";
    });
    educationList.addEventListener("mouseout", function() {
      educationList.style.background = "transparent";
    });
  
    // Add hover effect to skills section
    const skillsList = document.getElementById("skills");
    skillsList.addEventListener("mouseover", function() {
      skillsList.style.background = "#f0f0f0";
    });
    skillsList.addEventListener("mouseout", function() {
      skillsList.style.background = "transparent";
    });
  
    // Add hover effect to projects section
    const projectsList = document.getElementById("projects");
    projectsList.addEventListener("mouseover", function() {
      projectsList.style.background = "#f0f0f0";
    });
    projectsList.addEventListener("mouseout", function() {
      projectsList.style.background = "transparent";
    });
  
    // Add hover effect to contact form section
    const contactFormList = document.getElementById("contact-form");
    contactFormList.addEventListener("mouseover", function() {
      contactFormList.style.background = "#f0f0f0";
    });
    contactFormList.addEventListener("mouseout", function() {
      contactFormList.style.background = "transparent";
    });
  });
  
  // Add smooth scrolling to anchor links
  const anchorLinks = document.querySelectorAll("a[href^='#']");
  anchorLinks.forEach(function(anchor) {
    anchor.addEventListener("click", function(event) {
      event.preventDefault();
      document.querySelector(anchor.getAttribute("href")).scrollIntoView({
        behavior: "smooth"
      });
    });
  });