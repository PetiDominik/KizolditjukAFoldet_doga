

class DataService {
    #eventDispatchHeader;

    constructor(eventDispatchHeader) {
        this.#eventDispatchHeader = eventDispatchHeader;
        axios.defaults.baseURL = "http://localhost:8001/api";
    }

    getData(endPoint) {

        axios.get(endPoint)
            .then(response => {
                window.dispatchEvent(new CustomEvent(`${this.#eventDispatchHeader}#endDataGet`, {detail: response.data}));
            })
            .catch(error => {
                window.dispatchEvent(new CustomEvent(`${this.#eventDispatchHeader}#error`, {detail: error}));
            });
    }

    addData(endPoint, datas, okFnc = null) {
        axios.post(endPoint, datas)
            .then(response => {
                window.dispatchEvent(new CustomEvent(`${this.#eventDispatchHeader}#endDBUsage`));
                if (okFnc != null) {
                    okFnc(response);
                }
            })
            .catch(error => {
                window.dispatchEvent(new CustomEvent(`${this.#eventDispatchHeader}#error`, {detail: error}));
          });
    }

    editData(endPoint, datas, okFnc = null) {
        axios.put(endPoint, datas)
            .then(response => {
                window.dispatchEvent(new CustomEvent(`${this.#eventDispatchHeader}#endDBUsage`));
                if (okFnc != null) {
                    okFnc(response);
                }
            })
            .catch(error => {
                window.dispatchEvent(new CustomEvent(`${this.#eventDispatchHeader}#error`, {detail: error}));
            })
    }
}

export default DataService;