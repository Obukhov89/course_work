<template>
    <div class="modal-backdrop">
      <transition>
        <form class="modal">
            <div class="modal-header">Работа с расписанием
            <button class="btn-close">X</button>
          </div>
          <label for="date">Дата:</label>
          <input class="modalInput" name="date" id="date" type="number">
          <label for="selectTime">Выберете время:</label>
          <select class="modalInput" id="selectTime">
            <option>Тест</option>
          </select>
          <label for="nameGroup">Выберете группу:</label>
          <select class="modalInput" id="nameGroup">
            <option>Тест</option>
          </select>
          <label for="nameDiscipline">Выберете предмет:</label>
          <select class="modalInput" id="nameDiscipline">
            <option>Тест</option>
          </select>
          <label for="nameTeacher">Выберете преподавателя:</label>
          <select class="modalInput" id="nameTeacher">
            <option>Тест</option>
          </select>
          <label for="nameRoom">Выберете аудиторию:</label>
          <select class="modalInput" id="nameRoom">
            <option>Тест</option>
          </select>
          <button class="btn">Сохранить</button>
        </form>
      </transition>
    </div>
</template>

<script>
export default {
  name: "CalendarModal"
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap');
.modal-backdrop {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.3);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal {
  width: 500px;
  height: 600px;
  background: #ffffff;
  box-shadow: 2px 2px 20px 1px;
  overflow-x: auto;
  display: flex;
  flex-direction: column;
  border-radius: 15px;
}

.modal label{
  margin: 1rem 0 1rem 1rem;
  color: #1f6d17;
}

.modalInput{
  padding-left: 10px;
  width: 350px;
  height: 25px;
  margin: 0 auto;
  border: 1px solid lightgray;
  box-shadow: #727272;
  border-radius: 5px;
}

.modal-header,
.modal-footer {
  padding: 15px;
  display: flex;
}

.modal-header {
  border-bottom: 1px solid #eeeeee;
  color: #1f6d17;
  justify-content: space-between;
}

.modal-footer {
  border-top: 1px solid #eeeeee;
  justify-content: flex-end;
}

.modal-body {
  position: relative;
  padding: 20px 10px;
}

.btn-close {
  border: none;
  font-size: 15px;
  cursor: pointer;
  font-weight: bold;
  color: #1f6d17;
  background: transparent;
}

.btn {
  margin: 1rem;
  width: 145px;
  height: 45px;
  color: white;
  font-family: 'Roboto', sans-serif;
  font-size: 15px;
  background: #1f6d17;
  border: 1px solid #1f6d17;
  border-radius: 2px;
}

.modal-fade-enter,
.modal-fade-leave-active {
  opacity: 0;
}

.modal-fade-enter-active,
.modal-fade-leave-active {
  transition: opacity 0.5s ease;
}
</style>