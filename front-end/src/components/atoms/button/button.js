import React from 'react'
import './button.css'

const Button = (props) => {
  const onLink = () => {

  }
  return (
    <div>
        <button className='button'>{props.title}</button>
    </div>
  )
}

export default Button