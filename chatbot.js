// Function to send a user message and receive a response
function sendMessage() {
    const userInput = document.getElementById('user-input');
    const chatOutput = document.querySelector('.chat-output');
    const userMessage = userInput.value.trim();

    if (userMessage === '') {
        return;
    }

    // Display user's message
    chatOutput.innerHTML += `<div class="user-message">${userMessage}</div>`;
    userInput.value = '';

    // Simulate a simple chatbot response (you can replace this with actual chatbot logic)
    const botResponse = getBotResponse(userMessage);

    // Display chatbot's response
    setTimeout(() => {
        chatOutput.innerHTML += `<div class="bot-message">${botResponse}</div>`;
    }, 500); // Simulate a brief delay for the chatbot response
}

// Function to simulate a simple chatbot response (replace with actual logic)
function getBotResponse(userMessage) {
    // You can add your own logic here to generate chatbot responses based on user input
    // For now, this is a simple example
    return 'Hello! How can I assist you today?';
}

// Function to toggle the visibility of the chatbot container
function toggleChatbot() {
    const chatbotContainer = document.querySelector('.chatbot-container');
    chatbotContainer.classList.toggle('chatbot-visible');
}

// Attach the toggleChatbot function to the chatbot icon
const chatbotIcon = document.querySelector('.chatbot-icon');
chatbotIcon.addEventListener('click', toggleChatbot);
