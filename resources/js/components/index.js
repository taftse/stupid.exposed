import Vue from 'vue'

import Dropdown from './Dropdown/Dropdown'
import DropdownTrigger from './Dropdown/DropdownTrigger'
import DropdownMenu from './Dropdown/DropdownMenu'
Vue.component('dropdown',Dropdown);
Vue.component('dropdown-trigger',DropdownTrigger);
Vue.component('dropdown-menu',DropdownMenu);

import Card from "./Card/Card";
import CardHeader from "./Card/CardHeader";
import CardBody from "./Card/CardBody";
import CardFooter from "./Card/CardFooter";
Vue.component('card',Card);
Vue.component('card-header',CardHeader);
Vue.component('card-body',CardBody);
Vue.component('card-footer',CardFooter);

import PostDetails from './Post/PostDetails';
import PostPreview from "./Post/PostPreview";
import TextComponent from "./Post/Components/View/TextComponent";
import ImageComponent from "./Post/Components/View/ImageComponent";
import VideoComponent from "./Post/Components/View/VideoComponent";
import VimeoVideoProvider from "./Post/Components/View/Video/VimeoVideoProvider";
import YouTubeVideoProvider from "./Post/Components/View/Video/YouTubeVideoProvider";
import AudioComponent from "./Post/Components/View/AudioComponent";




Vue.component('post-details',PostDetails);
Vue.component('post-preview',PostPreview);
Vue.component('text-component',TextComponent);
Vue.component('image-component',ImageComponent);
Vue.component('video-component',VideoComponent);
Vue.component('youtube-video-provider',YouTubeVideoProvider);
Vue.component('vimeo-video-provider',VimeoVideoProvider);

Vue.component('audio-component',AudioComponent);


