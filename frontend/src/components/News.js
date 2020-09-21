import React from 'react';
import '../style/App.css';



function News({news}) {
    return (
        <section>
            {news && news.map((item, key) => <div key={key}>{item.name}</div>)}
        </section>
    );
}

export default News;
