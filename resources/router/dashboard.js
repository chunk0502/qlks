import DashboardPublic from '../js/Pages/Home.vue'
import Feedback from '../js/Pages/Feedback.vue'
import Check from '../js/Pages/Check.vue'
import Map from '../js/Pages/Map.vue'
import RoomDetail from '../js/Pages/RoomDetail.vue'
const dashboard = [
    {
        path: "/",
        component: DashboardPublic,
    },
    {
        path: '/room/:id',
        name: 'RoomDetail',
        component: RoomDetail,
    },
    {
        path: "/feedback",
        component: Feedback
    },
    {
        path: "/check",
        component: Check
    },
    {
        path: "/map",
        component: Map
    },
]
export default dashboard;
