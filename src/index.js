



const el = wp.element.createElement;
const { registerBlockType } = wp.blocks;
const { InnerBlocks } = wp.blockEditor;



const BLOCKS_TEMPLATE = [
  [ 'core/image', {} ],
  [ 'core/paragraph', { placeholder: 'Image Details' } ],
];

wp.blocks.registerBlockType("sinngrund/kulture-datenbank", {
  title: "Kulture Datenbank Beitrag",
  icon: "paperclip",
  category: "common",
  attributes:{
    longitude: {type: "string"},
    latitude: {type: "string"}
  },
  edit: function (props) {

    function updateLong(event){
        props.setAttributes({longitude: event.target.value})
    }

    function updateLat(event){
        props.setAttributes({latitude: event.target.value})
    }

    return (
        <InnerBlocks />
        // <div>
        //     <input type="text" placeholder="longitude" value={props.attributes.longitude} onChange={updateLong} />
        //     <input type="text" placeholder="latitude" value={props.attributes.latitude} onChange={updateLat} />
        // </div>
    )

  },
  save: function (props) {
    return (
        <div>
            <h3> front hello</h3>
            <p>The value: {props.attributes.longitude} latitude:{props.attributes.latitude}</p>
        </div>
    )
  }
})