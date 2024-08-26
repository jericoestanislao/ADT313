import './Description.css';

function Description({description}) {
    return(
        <div>
            <p className='text-description'> {description} </p>
        </div>
    )
}

export default Description;