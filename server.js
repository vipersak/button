const express = require('express');
const app = express();


// Serve static files (including CSS file) from the "public" directory
app.use(express.static('public'));

// Serve the HTML file
app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index2.html');
});

// Start the server
app.listen(5000, () => {
  console.log('Server started on port 5000');
});