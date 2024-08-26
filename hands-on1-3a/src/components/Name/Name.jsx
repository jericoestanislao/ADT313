import './Name.css';

function Name({ firstname, lastname }) {
    return (
        <div>
            <h1> <span className='firstname-color'>{firstname}</span> <span className='lastname-color'>{lastname}</span> </h1>
        </div>
    )
}

export default Name;