<template>
  <div id="app">
    <div class="left-section">
      <div class="image-slider">
        <button class="nav-button left" @click="prevImage">&#10094;</button>
        <img :src="images[currentImage]" alt="Room Image"/>
        <button class="nav-button right" @click="nextImage">&#10095;</button>
      </div>
      <div class="image-info">
        <p>Image {{ currentImage + 1 }} of {{ images.length }}</p>
      </div>
    </div>
    <div class="right-section">
      <div class="header">
        <h1>1 King Bed, Room</h1>
        <button class="close-button" @click="close">X</button>
      </div>
      <div class="room-details">
        <div class="details-column">
          <h3>Room Highlights</h3>
          <ul>
            <li>Guaranteed</li>
            <li>During your stay</li>
            <li>🛏️ 1 King Bed</li>
            <li>✅ Max occupancy: 2</li>
          </ul>
          <h3>Accessibility Features</h3>
          <ul>
            <li>🎊Wide pathways designed for wheelchair access</li>
            <li>💒Room equipped with disability support accessories</li>
          </ul>
          <h3>Special Benefits</h3>
          <ul>
            <li>📶High-speed Wi-Fi</li>
          </ul>
          <h3>Bedding and Amenities</h3>
          <ul>
            <li>🛌🏻Max occupancy: 2</li>
            <li>🛌🏻No extra beds allowed</li>
            <li>🛌🏻Free cribs available upon request</li>
            <li>🛌🏻Additional linens and pillows available upon request</li>
          </ul>
        </div>
        <div class="details-column">
          <h3>Room Information</h3>
          <ul>
            <li>🏠37sqm/398sqft</li>
            <li>💨Air conditioning</li>
            <li>📶🏠Connecting rooms available (select rooms)</li>
            <li>Spacious living area</li>
            <li>🚭Non-smoking room</li>
            <li>📶USB outlets available</li>
          </ul>
          <h3>Bath and Bathroom</h3>
          <ul>
            <li>✓Marble bathroom</li>
            <li>🚿Separate bathtub and shower</li>
            <li>✓Hair dryer</li>
            <li>🛁Bathrobe</li>
            <li>🥋Slippers</li>
          </ul>
        </div>
        <div class="details-column">
          <h3>Food & Beverage</h3>
          <ul>
            <li>☎️24-hour room service</li>
            <li>🥛Complimentary bottled water</li>
            <li>🛢️Mini refrigerator, additional fee</li>
            <li>☕Coffee/tea maker</li>
          </ul>
          <h3>Entertainment</h3>
          <ul>
            <li>📺Cable/satellite TV</li>
            <li>📺Flat-screen TV, remote control</li>
            <li>📺Available CNN, ESPN, and HBO channels</li>
            <li>📻Radio</li>
          </ul>
        </div>
      </div>
      <div class="divider"></div>
      <div class="discount">
        <span class="discount-label">-58% Just today!</span>
        <div class="price-details">
          <span class="original-price">5.559.671₫</span>
          <span class="current-price">2.313.988₫</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HomePage',
  data() {
    return {
      images: [
        'https://vn.sheratonsaigon.com/resourcefiles/roomssmallimages/sgnsisuperiorstudio.jpg?version=5282024223756',
        'https://vn.sheratonsaigon.com/resourcefiles/roomssmallimages/sgnsisuperiorstudiotwin.jpg?version=5282024223756',
        'https://vn.sheratonsaigon.com/resourcefiles/roomssmallimages/sgnsiexecutive2.jpg?version=5282024223756',
        // Add more image URLs here
      ],
      currentImage: 0
    };
  },
  methods: {
    nextImage() {
      this.currentImage = (this.currentImage + 1) % this.images.length;
    },
    prevImage() {
      this.currentImage = (this.currentImage - 1 + this.images.length) % this.images.length;
    },
    close() {
      console.log("Closing the room details...");
      // Close or hide room details
    }
  }
};
</script>

<style>
#app {
  display: flex;
  height: 100vh;
  font-family: Arial, sans-serif;
}

.left-section {
  width: 40%;
  background-color: #f4f4f4;
  padding: 20px;
  box-sizing: border-box;
}

.right-section {
  width: 60%;
  background-color: white;
  padding: 20px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.header h1 {
  font-size: 24px;
  margin: 0;
}

.close-button {
  background-color: transparent;
  border: none;
  font-size: 24px;
  cursor: pointer;
}

.close-button:hover {
  color: red;
}

.image-slider {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 10px;
}

.image-slider img {
  max-width: 100%;
  height: auto;
}

.nav-button {
  position: absolute;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px;
  cursor: pointer;
  font-size: 18px;
}

.nav-button.left {
  left: 10px;
}

.nav-button.right {
  right: 10px;
}

.nav-button:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.image-info {
  text-align: center;
  font-size: 14px;
  color: #555;
  margin-top: 10px;
}

.room-details {
  flex-grow: 1;
  overflow-y: auto;
}

.details-column {
  margin-bottom: 20px;
}

.details-column h3 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 15px;
  color: black;
}

.details-column ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.details-column ul li {
  font-size: 14px;
  margin-bottom: 10px;
}

.divider {
  height: 2px;
  background-color: #555;
  margin: 0 0 20px 0;
  flex-shrink: 0;
}

.discount {
  text-align: left;
  margin-top: 20px;
  background-color: #fff;
  position: sticky;
  bottom: 0;
  padding-top: 20px;
}

.discount-label {
  background-color: red;
  color: white;
  padding: 5px 10px;
  font-size: 14px;
  font-weight: bold;
}

.price-details {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.original-price {
  font-size: 14px;
  color: #888;
  text-decoration: line-through;
  margin-bottom: 5px;
}

.current-price {
  font-size: 24px;
  color: black;
  font-weight: bold;
}
</style>
