import React, {useCallback, useState} from 'react';
import '../style/App.css';
import {setNew} from '../fetches/news'

function AddNew() {
  const [description, setDescription] = useState('')
  const [name, setName] = useState('')
  const [info, setInfo] = useState('')
  const [image, setImage] = useState('')

  const addNew = useCallback(() => {
    const data = {description, name, info, image, favorite: 1, id_city:2}
    setNew(data)
  },[description, name, info, image])

  return (
    <section className="form-add-new">
      <input type="text" placeholder="description" name="description" onInput={e => setDescription(e.target.value)}/>
      <input type="text" placeholder="name" name="name" onInput={e => setName(e.target.value)}/>
      <input type="text" placeholder="info" name="info" onInput={e => setInfo(e.target.value)}/>
      <input type="text" placeholder="image" name="image" onInput={e => setImage(e.target.value)}/>
      <button onClick={addNew}>Добавить новость</button>
    </section>
  );
}

export default AddNew;