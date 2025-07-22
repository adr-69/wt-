const openPopup = document.querySelectorAll('.topicBTNpop');
const closePopup = document.getElementById('closePopup');
const popup = document.getElementById('popup')
openPopup.forEach(btn => {
    btn.onclick = () => {
        popup.style.display = 'flex';
    };
});
closePopup.onclick = () => {
    popup.style.display = 'none';
}

function botBTN() {
    alert("Bot are Under Development.");
}