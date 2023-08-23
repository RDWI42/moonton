import React from "react";

export default function Label({forInput, value, className, childern}){
    return (
        <label htmlFor={forInput} className={'text-base block mb-2' + className}>
            {value ? value : childern}
        </label>
    )
}