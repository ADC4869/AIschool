document.getElementById('total-attendance').addEventListener('click', function() {
        toggleCards('all', true);
    });

    document.getElementById('present-count').addEventListener('click', function() {
        toggleCards('present', false);
    });

    document.getElementById('absent-count').addEventListener('click', function() {
        toggleCards('absent', false);
    });

    document.getElementById('late-count').addEventListener('click', function() {
        toggleCards('late', false);
    });

    function toggleCards(type, showAll) {
        const cards = document.querySelectorAll('.card');
        
        // Reset all cards to default style
        cards.forEach(card => {
            card.style.display = 'none';
            card.classList.remove('active');
        });

        if (showAll) {
            cards.forEach(card => {
                card.style.display = 'flex'; // Show all cards
                card.classList.add('active'); // Set active class to change background color
            });
        } else {
            const activeCards = document.querySelectorAll(`.${type}-card`);
            activeCards.forEach(card => {
                card.style.display = 'flex'; // Show only relevant cards
                if (type === 'absent') {
                    card.classList.add('active'); // Change background color to red
                } else if (type === 'late') {
                    card.classList.add('active'); // Change background color to orange
                } else {
                    card.classList.remove('active'); // Keep default color for present
                }
            });
        }
    }