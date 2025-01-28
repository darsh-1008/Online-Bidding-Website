document.addEventListener('DOMContentLoaded', function () {
    const auctionList = document.getElementById('auction-list');

    // Example data (replace with dynamic data from the server)
    const auctions = [
        { id: 1, title: 'Smartphone', currentBid: 100 },
        { id: 2, title: 'Laptop', currentBid: 500 },
        { id: 3, title: 'Camera', currentBid: 200 },
        { id: 4, title: 'Vintage Watch', currentBid: 300 }  // Added static auction
    ];

    // Render auction items
    auctions.forEach(auction => {
        const auctionItem = document.createElement('div');
        auctionItem.classList.add('auction-item');
        auctionItem.innerHTML = `
            <h2>${auction.title}</h2>
            <p>Current Bid: $${auction.currentBid}</p>
            <button class="bid-button" onclick="placeBid(${auction.id})">Place Bid</button>
        `;
        auctionList.appendChild(auctionItem);
    });
});

// Function to handle placing bids (this would be more complex with server-side logic)
function placeBid(auctionId) {
    const newBidAmount = prompt('Enter your bid amount:');
    // Send the bid to the server for processing
    console.log(`Placing bid of $${newBidAmount} for auction ID ${auctionId}`);
    // Update the UI to reflect the new bid (this would involve more complex logic)
    // For simplicity, we'll just refresh the page here
    location.reload();
}