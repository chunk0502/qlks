<style scoped>
@media screen and (min-width: 768px) {
    .desktop-only {
        margin-left: 400px;
    }

    p,
    a {
        color: white;
        text-decoration: none;
    }
}

input[type="date"]::-webkit-calendar-picker-indicator {
    color: rgba(0, 0, 0, 0);
    opacity: 1;
    display: block;
    background: url(data:image/png;base64,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) no-repeat;
    width: 20px;
    height: 20px;
    border-width: thin;
}
.room-content {
    display: flex;
    align-items: center;
    margin-bottom: 20px; /* Thêm khoảng cách giữa các phòng */
    border-bottom: 1px solid #ddd; /* Thêm đường kẻ dưới mỗi phòng */
    padding-bottom: 10px; /* Thêm khoảng cách bên dưới nội dung phòng */
}
.room-detail {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 20px;
}
.room-image {
    width: 50%;
    height: auto;
    margin-right: 20px;
    max-width: 200px;
}

.price-info {
    width: 50%;
}

.price-item {
    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
}
.price-info {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
}

.price-text {
    margin-bottom: 10px;
}

.room-name {
    font-size: 20px;
    color: #333;
}

.rate-details {
    font-size: 14px;
    color: #888;
}

.price-and-button {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.room-price {
    font-size: 18px;
    color: #333;
    font-weight: bold;
}

.select-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.select-button:hover {
    background-color: #0056b3;
}
.selected-dates {
    margin-top: 20px;
    font-size: 18px;
}

.selected-dates h4 {
    margin-bottom: 10px;
    color: #333;
}

.selected-dates p {
    margin: 5px 0;
    color: #666;
}
</style>

<template>
    <router-view>
    <div>
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                     data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h6>HI {{ login_namaTamu }}</h6>
                        <h2>Relax Your Mind</h2>
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference
                            in price. You may see some for as low as $.17 each.</p>
                    </div>
                </div>
            </div>

            <!--================ Room Area  =================-->
                                <Room></Room>
            <!--================ Room Area  =================-->


            <div class="hotel_booking_area position" style="position: relative;">
                <div class="container">
                    <div class="hotel_booking_table">
                        <div class="col-md-3">
                            <h2>Book<br> Your Room</h2>
                        </div>
                        <div class="col-md-9" ref="bookYourRoom">
                            <div class="boking_table">
                                <form @submit.prevent="fetchAvailableRooms">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="book_tabel_item">
                                                <div class="form-group">
                                                    <label for="checkin"
                                                           class="form-label text-light">Check-In</label>
                                                    <div class='input-group date' id='datetimepicker11'>
                                                        <input type="date" required
                                                               class="form-control" v-model="checkin"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="checkout"
                                                           class="form-label text-light">Check-Out</label>
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type="date" required
                                                               class="form-control" v-model="checkout"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="book_tabel_item">
                                                <div class="form-group">
                                                    <label for="person" style="visibility: hidden;">lol</label>
                                                    <select id="person" required
                                                            class="form-control" v-model="persons">
                                                        <option value="">Person</option>
                                                        <option value="2">1 - 2 Person</option>
                                                        <option value="4">2 - 4 Person</option>
                                                    </select>
                                                </div>
                                                <label for="submit"></label>
                                                <button type="submit"
                                                        class=" mt-3 book_now_btn button_hover" id="submit"
                                                        style="text-decoration: none;">Search Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Banner Area =================-->

        <section class="accomodation_area section_gap container-backgroundroom" id="booking" ref="bookingKamar">
            <div class="container ">
                <div class="room-detail" v-if="availableRooms.length">
                    <div class="selected-dates" v-if="checkin && checkout && persons">
                        <h4>Ngày Đã Chọn</h4>
                        <p>Ngày Nhận Phòng: {{ checkin }}</p>
                        <p>Ngày Trả Phòng: {{ checkout }}</p>
                        <p>So Nguoi: {{ persons }}</p>
                    </div>
                    <h2>Suite Room</h2>
                    <br>
                    <div class="room-content" v-for="room in availableRooms" :key="room.id">
                        <img :src="modifyImageUrl(room.feature_image)" alt="Room Image" class="room-image">
                        <div class="price-info">
                            <div class="price-item">
                                <div class="price-text">
                                    <h3>{{ room.name }}</h3>
                                    <p class="rate-details">Rate Details</p>
                                </div>
                                <div class="price-and-button">
                                    <h4>{{ formatPrice(room.price) }} </h4><h8>VND/ đêm</h8>
                                    <button class="select-button" @click="goToRoomDetail(room.id)">Đặt ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================ Booking Area  =================-->
        <section class="accomodation_area section_gap" id="booking" ref="bookingKamar">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Hotel Room</h2>
                    <p class="text-dark">We all live in an age that belongs to the young at heart. Life that is becoming
                        extremely fast, </p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-3 col-sm-6" v-for="room in roomData" :key="room.id_kamar">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img :src="'http://localhost/UKL-Hotel/HotelLaravel_9/public/images/' + room.foto" alt=""
                                     height="300" >
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

        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Royal Facilities</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->

        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                                standards especially in the workplace. That's why it's crucial that, as women, our behavior
                                on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                            <a href="#" class="button_hover theme_btn_two">Request Custom Price</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="/image/about_bg.jpg" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->

        <!--================ Testimonial Area  =================-->
        <section class="testimonial_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Testimonial from our Clients</h2>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from
                    </p>
                </div>
                <div class="testimonial_slider owl-carousel">
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="/image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If
                                you think about it, you travel across her face, and She is the </p>
                            <a href="#">
                                <h4 class="sec_h4">Fanny Spencer</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="/image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If
                                you think about it, you travel across her face, and She is the </p>
                            <a href="#">
                                <h4 class="sec_h4">Fanny Spencer</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="/image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If
                                you think about it, you travel across her face, and She is the </p>
                            <a href="#">
                                <h4 class="sec_h4">Fanny Spencer</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="/image/testtimonial-1.jpg" alt="">
                        <div class="media-body">
                            <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If
                                you think about it, you travel across her face, and She is the </p>
                            <a href="#">
                                <h4 class="sec_h4">Fanny Spencer</h4>
                            </a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Testimonial Area  =================-->

        <!--================ Latest Blog Area  =================-->
        <section class="latest_blog_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">latest posts from blog</h2>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from
                    </p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="/image/blog/blog-1.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Travel</a>
                                    <a href="#" class="button_hover tag_btn">Life Style</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">Low Cost Advertising</h4>
                                </a>
                                <p>Acres of Diamonds… you've read the famous story, or at least had it related to you. A
                                    farmer.</p>
                                <h6 class="date title_color">31st January,2018</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="/image/blog/blog-2.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Travel</a>
                                    <a href="#" class="button_hover tag_btn">Life Style</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">Creative Outdoor Ads</h4>
                                </a>
                                <p>Self-doubt and fear interfere with our ability to achieve or set goals. Self-doubt and
                                    fear are</p>
                                <h6 class="date title_color">31st January,2018</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="/image/blog/blog-3.jpg" alt="post">
                            </div>
                            <div class="details">
                                <div class="tags">
                                    <a href="#" class="button_hover tag_btn">Travel</a>
                                    <a href="#" class="button_hover tag_btn">Life Style</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">It S Classified How To Utilize Free</h4>
                                </a>
                                <p>Why do you want to motivate yourself? Actually, just answering that question fully can
                                </p>
                                <h6 class="date title_color">31st January,2018</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Recent Area  =================-->


        <!-- BookModal -->
<!--        <div class="modal fade" id="BookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--            <div class="modal-dialog modal-xl">-->
<!--                <div class="modal-content">-->
<!--                    <div class="modal-header">-->
<!--                        <h1 class="modal-title fs-5" id="exampleModalLabel">Book Now</h1>-->
<!--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                    </div>-->
<!--                    <form >-->
<!--                        <div class="modal-body">-->
<!--                            <div class="row">-->
<!--                                <div class="col">-->
<!--                                    <div class="hotel_img">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col">-->

<!--                                    <h3>Night</h3>-->

<!--                                    <label for="email">Email: </label>-->
<!--                                    <input type="email" v-model="bookData.email" autocomplete="off" class="form-control"-->
<!--                                           required placeholder="Masukkan email...">-->
<!--                                    &lt;!&ndash; <small>Gunakan email login?<span class="text-primary" style="cursor: pointer;"-->
<!--                                            @click="useEmail">iya</span></small> <br> &ndash;&gt;-->

<!--                                    <label for="name">Nama: </label>-->
<!--                                    <input type="text" class="form-control"-->
<!--                                           placeholder="Masukkan nama..." required autocomplete="off">-->

<!--                                    <div class="row mt-3">-->
<!--                                        <div class="col">-->
<!--                                            <label for="checkin">Check-in:</label>-->
<!--                                            <input type="date" class="form-control" required>-->
<!--                                        </div>-->
<!--                                        <div class="col">-->
<!--                                            <label for="checkout">Check-out:</label>-->
<!--                                            <input type="date" class="form-control" required>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col">-->
<!--                                            <label for="jumlah">Jumlah kamar: </label>-->
<!--                                            <input type="number" class="form-control" required-->
<!--                                                   placeholder="Jumlah kamar...">-->
<!--                                        </div>-->
<!--                                        <div class="col">-->
<!--                                            <input type="hidden" >-->
<!--                                            <label for="harga">Total harga:</label>-->
<!--                                            <input type="number" readonly class="form-control" >-->
<!--                                            <small  style="color: red;">*Masukkan data dengan-->
<!--                                                benar</small>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <hr>-->
<!--                            <div class="container mt-4">-->
<!--                                <div class="row">-->
<!--                                    <div class="col">-->
<!--                                        <i class="lnr lnr-dinner"></i> Restaurant-->
<!--                                    </div>-->
<!--                                    <div class="col">-->
<!--                                        <i class="bi bi-cup-hot btn"></i> Cafe-->
<!--                                    </div>-->
<!--                                    <div class="col">-->
<!--                                        <i class="bi bi-wifi btn"></i> Wifi-->
<!--                                    </div>-->
<!--                                    <div class="col">-->
<!--                                        <i class="lnr lnr-bicycle"></i> Sports CLub-->
<!--                                    </div>-->
<!--                                    <div class="col">-->
<!--                                        <i class="lnr lnr-car"></i> Rent a Car-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row mt-4">-->
<!--                                    <div class="col">-->
<!--                                        <i class="lnr lnr-construction"></i>Gymnesium-->
<!--                                    </div>-->
<!--                                    <div class="col">-->
<!--                                        <i class="lnr lnr-coffee-cup"></i> Bar-->
<!--                                    </div>-->
<!--                                    <div class="col">-->

<!--                                    </div>-->
<!--                                    <div class="col">-->

<!--                                    </div>-->
<!--                                    <div class="col">-->

<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="modal-footer">-->
<!--                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
<!--                            <button type="submit" class="btn btn-primary">Booking</button>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
    </router-view>
</template>
<script >
import {computed, defineComponent, ref} from "vue";
import Room from "../Components/Room.vue"

export default defineComponent({
    components: {Room},
    data() {
        return {
            checkin: '',
            checkout: '',
            persons: '',
            availableRooms: []
        }
    },



    methods: {
        async fetchAvailableRooms() {
            this.error = null; // Reset error
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/rooms/available', {
                    params: {
                        checkin: this.checkin,
                        checkout: this.checkout,
                        persons: this.persons,
                    }
                });
                this.availableRooms = response.data;
            } catch (error) {
                this.error = 'Failed to fetch available rooms. Please try again.';
                console.error('Error fetching available rooms:', error);
            }
        },
        formatPrice(value) {
            const  formattedValue =value.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
            return formattedValue .replace('₫', '').trim();
        },
        modifyImageUrl(imageUrl) {
            const params = '?output-quality=70&interpolation=progressive-bilinear&downsize=512px:342px';
            return `${imageUrl}${params}`;
        },
        goToRoomDetail(roomId) {
            this.$router.push({ name: 'RoomDetail', params: { id: roomId } });
        }
    }
})
</script>
