const toggleButton = document.getElementById("toggle-button");
const chatDisplay = document.getElementById("chat-display");
const userInput = document.getElementById("user-input");
const sendButton = document.getElementById("send-button");
const removeButton = document.getElementById("remove-button");
const iconSend = document.getElementById("icon");
// Lưu data user

// Xử lý sự kiện click vào nút Toggle Chat
// Hàm xử lý hiển thị/ẩn chatbox
toggleButton.addEventListener("click", () => {
    document.querySelector(".chat-container").classList.toggle("show");
});
removeButton.addEventListener("click", () => {
    document.querySelector(".chat-container").classList.toggle("show");
});

// Xử lý sự kiện click vào nút Send
sendButton.addEventListener("click", sendMessage);

// Xử lý sự kiện nhấn Enter trong input
userInput.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        sendMessage();
    }
});
userInput.addEventListener("input", checkInput);

// Hàm xử lý sendButton khi có data
function checkInput() {
    const message = userInput.value;

    if (message.trim() === "") {
        iconSend.style.opacity = "0.5";
    } else {
        iconSend.style.opacity = "1";
    }
}

// Hàm xử lý gửi tin nhắn
function sendMessage() {
    const message = userInput.value;

    // Kiểm tra xem người dùng đã nhập tin nhắn hay chưa
    if (message.trim() !== "") {
        displayMessage(message);
        userInput.value = ""; // Xóa nội dung trong input
    }
}

// Hàm hiển thị tin nhắn trong chat box
function displayMessage(message) {
    const messageElement = document.createElement("div");
    messageElement.classList.add("message");

    const contentElement = document.createElement("span");
    contentElement.classList.add("content");
    contentElement.textContent = message;

    messageElement.appendChild(contentElement);

    chatDisplay.appendChild(messageElement);
}

// Xử lý lưu trữ thông tin đăng nhập
