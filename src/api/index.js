import axios from 'axios'; // package.json 에 있는 axios 라이브러리를 들고오는 것임 

// 1. HTTP Request & Response 와 관련된 기본 설정 
const config ={
    baseUrl : 'https://api.hnpwa.com/v0/'
}

// 2. API 함수들을 정리 
function fetchNewsList(){
    //return axios.get(config.baseUrl + 'news/1.json');
    return axios.get(`${config.baseUrl}news/1.json`);
}