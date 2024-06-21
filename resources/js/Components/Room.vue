<style>
.container-backgroundroom{
    background-color: rgba(211,216,211);
    align-items: center;
    justify-content: center;
}

.slide-show {
    overflow: hidden;
    position: relative;
    display: flex;
}
.list-images {
    display: flex;
    transition: 0.5s;
}


.overlay-div-left {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-170%, 20%);
    width: 28%;
    background-color: white;
    text-align: center;
    padding: 30px;
    box-sizing: border-box;
}
.overlay-div-right {
    transform: translate(750%, -300%);
    width: 10%;
    height: 6%;
    font-size: 45px;
    position: absolute;
    transition: 0.5s;
    cursor: pointer;
    background-color: black;

}
.room-title h2{
    font-size: 26px;
    margin-bottom: 19px;
}
.room-title p{
    color: #1F1F1F;
    font-size: 14px;
    font-family: Roboto,Sans-Serif,serif;
}
.room-desc p{
    line-height: 1.5;
}

.room-desc ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.room-desc ul li {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 10px;
    width: 33.33%;
}

.room-desc ul li i {
    font-size: 36px;
    color: black;
    margin-bottom: 5px;
}

.room-desc ul li span{
    font-weight: bold;
    color: #4F4F4F;
}

.room-button-order button {
    background-color: #4F4F4F; /* Màu nền đỏ */
    color: #FFFFFF; /* Màu chữ trắng */
    border: none;
    padding: 10px 30px; /* Tăng kích thước nút */
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s; /* Thêm hiệu ứng transition */
}

.room-button-order button:hover {
    background-color: #000000; /* Màu nền đen khi hover */
    color: #FFFFFF; /* Giữ màu chữ trắng khi hover */
}
.overlay-div-right .arrow-button {
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
}

.overlay-div-right {
    color: #333;
    font-size: 24px;
    margin: 0 10px;
    text-decoration: none;
}

.overlay-div-right .arrow-button .paginate-number {
    color: white;
    font-size: 16px;
    margin: 0 10px;
}
.arrow-button i{
    color: white;
    font-size: 30px;
}
</style>
<template>
    <!--================ Booking Area  =================-->
    <section class="accomodation_area section_gap container-backgroundroom" id="booking" ref="bookingKamar">
        <div class="container ">
            <div class="section_title text-center">
                <div class="slide-show">
                    <div class="list-images" v-for="(room, index) in rooms" :key="index" :style="{ transform: `translateX(-${currentImageIndex *100}%)` }">
                        <img :src="room.feature_image" alt="">
                    </div>
                </div>
                <div class="overlay-div-left">
                    <div v-for="(room, index) in rooms" :key="index" v-show="index === currentImageIndex">
                        <div class="room-info">
                            <div class="room-title">
                                <h2>{{ room.name }}</h2>
                                <div class="room-desc" v-html="room.description"></div>
                            </div>
                            <div class="room-desc">
                                <ul >
                                    <li><i class="ri-bard-line"></i> Loại phòng<span class="room-amenities-grp">{{ room.roomtype }}</span></li>
                                    <li><i class="ri-hotel-bed-line"></i> Giường<span class="room-amenities-grp">{{ room.bedroom }}</span></li>
                                    <li><i class="ri-group-line"></i> Sức chứa<span class="room-amenities-grp">{{ room.capacity }}</span></li>
                                </ul>
                            </div>
                            <div class="room-button-order">
                                <button @click="goToRoomDetail(room.id)">ĐẶT NGAY</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay-div-right">
                    <div class="arrow-button">
                        <div class="btn-right" @click="nextImage">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                        <div class="paginate-number">{{ currentImageIndex + 1 }}/{{ rooms.length }}</div>
                        <div class="btn-left" @click="prevImage">
                            <i class="ri-arrow-left-line"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6" v-for="room in roomData" :key="room.id_kamar">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img :src="'http://localhost/UKL-Hotel/HotelLaravel_9/public/images/' + room.foto" alt=""
                                 height="300" weight="450">
                        </div>
                        <a href="#" style="text-decoration:none;">
                            <h4 class="sec_h4">{{ room.type_kamar }} Room</h4>
                        </a>
                        <h5>Rp.{{ room.harga }}<small>/night</small></h5>
                        <a href="#" class="btn btn-warning text-light"
                           style="text-transform: uppercase; font-weight: bold;" data-bs-toggle="modal"
                           data-bs-target="#BookModal" @click="getDetailRoom(room)">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Booking Area  =================-->
</template>
<script >
import {computed, defineComponent, ref} from "vue";

export default defineComponent({
    setup() {
        const rooms = ref([]);
        const currentImageIndex = ref(0);
        const currentRoom = computed(() => rooms.value[currentImageIndex.value]);
        const nextImage = () => {
            currentImageIndex.value = (currentImageIndex.value + 1) % rooms.value.length;
        };
        const prevImage = () => {
            currentImageIndex.value = (currentImageIndex.value - 1 + rooms.value.length) % rooms.value.length;
        };
        const getRoom = () =>{
            axios
                .get('http://127.0.0.1:8000/api/rooms')
                .then(function (response) {
                    rooms.value =response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        };
        const goToRoomDetail = (id) => {
            router.push({ name: 'RoomDetail', params: { id } })
        }
        getRoom();
        return {
            rooms,
            nextImage,
            prevImage,
            currentImageIndex,
            currentRoom,
            goToRoomDetail,
        }
    },
})
</script>

