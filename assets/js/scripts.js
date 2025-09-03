// JavaScript to display current date
function updateDate() {
    const now = new Date();
    const dateString = now.toLocaleDateString();
    document.getElementById('dateDisplay').textContent = `Today's Date: ${dateString}`;
}
updateDate();
setInterval(updateDate, 86400000); // Update daily

// jQuery for toggling message
$(document).ready(function() {
    $("#toggleBtn").click(function() {
        $("#toggleMessage").slideToggle("fast");
    });
});