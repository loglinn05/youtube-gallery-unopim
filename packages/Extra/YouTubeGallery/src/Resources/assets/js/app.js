import Toast, {useToast} from "vue-toastification";
import "vue-toastification/dist/index.css";
import MyButton from "./components/MyButton.vue";
import MyInput from "./components/MyInput.vue";


app.use(Toast, {
    containerClassName: '!yg-z-[99999]',
    toastClassName: '!yg-z-[99999]'
});

const toast = useToast();

app.config.globalProperties.$toast = toast;
window.toast = toast;

app.component('my-input', MyInput);
app.component('my-button', MyButton);
