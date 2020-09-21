import axios from "axios";
import {crud2} from '../const'

export const getNews = (setNews) => {
    /*axios.defaults.baseURL = crud2;*/
    const url = `${crud2}/news`
    axios.get(url)
        .then(function (response) {
            // handle success
            console.log(response)
            setNews(response.data);
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
}



export const setNew = (data) => {

  const config = {
    method: 'post',
    url: `${crud2}/news`,
    headers: {
      'Content-Type': 'application/json',
      'Cookie': 'PHPSESSID=ac1c16b46e90aab67aff7d7dd9cb44ba; _csrf=eaa966480e8dd034e2aedd9075d176a9bf98d92ec8d8d7388fb841db6c089720a%3A2%3A%7Bi%3A0%3Bs%3A5%3A%22_csrf%22%3Bi%3A1%3Bs%3A32%3A%22Abqgebt2K2vTbCuErbsXufaUdT-prW5M%22%3B%7D'
    },
    data : data
  };

  axios(config)
    .then(function (response) {
      console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    });
}