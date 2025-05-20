const body = document.body;
const switchButton = document.createElement('button');
switchButton.textContent = 'Toggle Dark Mode';
switchButton.style.position = 'fixed';
switchButton.style.top = '10px';
switchButton.style.right = '10px';
switchButton.style.padding = '10px';
switchButton.style.cursor = 'pointer';
document.body.appendChild(switchButton);

switchButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
});

const style = document.createElement('style');
style.textContent = `
    .dark-mode {
        background-color: #121212;
        color: #ffffff;
    }
`;
document.head.appendChild(style);