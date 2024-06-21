<!-- views/RoomDetail.vue -->
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
                    <h1>SDVSDVSD</h1>
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

<script>
import axios from 'axios';
export default {
    props: ['id'],
    data() {
        return {
            room: {}
        }
    },
    created() {
        this.fetchRoomDetail()
    },
    methods: {
        fetchRoomDetail() {
            // Giả sử bạn có một API để lấy chi tiết phòng
            axios.get(`http://127.0.0.1:8000/api/room/${this.id}`)
                .then(response => {
                    this.room = response.data
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
}
</script>
