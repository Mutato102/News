
import React, {useEffect, useState} from 'react';
import News from './components/News'
import AddNew from './components/AddNew'
import './style/App.css';
import {getNews} from './fetches/news'



function App() {
    const [news, setNews] = useState([])
    useEffect(() => {//асинхронный запрос
        getNews(setNews)
    },[])
    console.log(news)
  return (
    <div className="App">
      <header className="App-header">
        <News news={news}/>
        <AddNew/>
      </header>

    </div>
  );
}

export default App;
