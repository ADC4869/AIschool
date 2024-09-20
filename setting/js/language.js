// Language data object
const languageData = {
    vi: {
        title: '',
        description: 'Thay đổi ngôn ngữ'
    },
    en: {
        title: '',
        description: 'change language'
    }
};

function selectLanguage(element) {
    // Remove 'selected' class from all options
    var options = document.querySelectorAll('.language-option');
    options.forEach(function(option) {
        option.classList.remove('selected');
    });

    // Add 'selected' class to the clicked option
    element.classList.add('selected');

    // Save the selected language in localStorage
    var selectedLang = element.getAttribute('data-lang');
    localStorage.setItem('selectedLanguage', selectedLang);

    // Apply the selected language
    applyLanguage(selectedLang);
}

function applyLanguage(lang) {
    // Set the content based on the selected language
    document.getElementById('title').innerText = languageData[lang].title;
    document.getElementById('description').innerText = languageData[lang].description;
}

// On page load, check localStorage and set the selected language
window.onload = function() {
    var savedLang = localStorage.getItem('selectedLanguage') || 'en';
    applyLanguage(savedLang);

    // Set the selected class on the corresponding language option
    var options = document.querySelectorAll('.language-option');
    options.forEach(function(option) {
        if (option.getAttribute('data-lang') === savedLang) {
            option.classList.add('selected');
        }
    });
}
